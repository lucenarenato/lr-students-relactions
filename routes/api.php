<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Projeto;
use App\Models\Desenvolvedor;
use App\Models\Alocacao;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// um pra um
Route::get('clientes', function () {
    //lazy loading
    $cli = Cliente::all();


    //o array passado dentro de with pode contrar todas as tabelas ligadas
    //eager loading
    $cliente = Cliente::with(['endereco'])->get();

    return $cliente ->toJson();
    //return $cli->toJson();
});

Route::get('enderecos', function () {
    //lazy loading
    $en = Endereco::all();

    //o array passado dentro de with pode contrar todas as tabelas ligadas
    //eager loading
    $endereco = Endereco::with(['cliente'])->get();

    return $endereco ->toJson();
    //return $en->toJson();
});

// Um pra muitos
Route::get('categorias', function(){
    $cat = Categoria::all();

    if( count($cat) === 0 ){
        echo "<h4>Não há categorias</h4>";
    }else{
        return $cat->toJson();
    }
});

Route::get('produtos', function(){
    $prod = Produto::with(['categoria'])->get();

    if( count($prod) === 0 ){
        echo "<h4>Não há categorias</h4>";
    }else{
        return $prod->toJson();
    }
});

Route::get('categorias/all', function(){
    $cats = Categoria::with('produtos')->get();
    return $cats->toJson();
});

Route::get('produtos/insert', function(){
    $cat = Categoria::find(1);

    $p = new Produto();
    $p->nome = "Air Jordan 1";
    $p->estoque = 100;
    $p->preco = 500;
    $p->categoria()->associate($cat);
    //$p->categoria_id = 1;
    $p->save();
    return $p->toJson();
});

Route::get('produtos/remover', function(){
    $p = Produto::find(8);

    if(isset($p)){
        //tira a dessassocia a categoria
        $p->categoria()->dissociate();
        $p->save();
        return $p->toJson();
    }
});

Route::get('produtos/adicionar/{cat}', function($catid){
    $cat = Categoria::with('produtos')->find($catid);

    $p = new Produto();
    $p->nome = "Xbox Series S";
    $p->estoque = 100;
    $p->preco = 3000;

    if(isset($cat)){
        $cat->produtos()->save($p);
    }

    $cat->load('produtos');

    return $cat->toJson();
});

// muitos pra muitos
Route::get('desenvolvedores', function(){
    $d = Desenvolvedor::with('projetos')->get();
    return $d->toJson();
});

Route::get('desenvolvedores/{id}', function($id){
    $d = Desenvolvedor::with('projetos')->find($id);
    return $d->toJson();
});

Route::get('projetos', function(){
    //$p = Projeto::all();
    $p = Projeto::with('desenvolvedores')->get();
    return $p->toJson();
});

Route::get('alocacao', function(){
    $a = Alocacao::all();
    return $a->toJson();
});

Route::get('alocacao/{p}/{d}', function($p,$d){
    $p = Projeto::find($p);

    if(isset($p)){
        $p->desenvolvedores()->attach($d,['horas_semanais'=>50]);
    }

    $a = Alocacao::all();
    return $a->toJson();
});

Route::get('desalocar/{p}/{d}', function($p,$d){
    $p = Projeto::find($p);

    if(isset($p)){
        $p->desenvolvedores()->detach($d);
    }
});
