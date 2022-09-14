<?php

use App\Models\Projeto;
use App\Models\Desenvolvedor;
use App\Models\Alocacao;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Categoria;
use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
})->name('index');

// Validação
Route::resource('cliente', ClienteControlador::class);

// um pra um
Route::get('clientes', function () {
    $cli = Cliente::all();
    foreach( $cli as $c ){
        echo $c->nome;
        echo "\n\n";
        echo $c->endereco;
        echo "<br>";
    }
});

Route::get('enderecos', function () {
    $en = Endereco::all();
    foreach( $en as $e ){
        echo $e->cliente->nome;
        echo "\n\n";
        echo $e->numero;
    }
});

Route::get('clientes/insert', function(){
    $c = new Cliente();
    $c->nome = "Francisco";
    $c->idade = 60;
    $c->endereco = "xxx";
    $c->email = "teste@teste.com";
    $c->telefone = "11971257707";
    $c->save();

    $e = new Endereco();
    $e->rua = "Av goias";
    $e->numero = 159;
    $e->bairro = "Jardim America";
    $e->cidade = "Goiania";
    $e->uf = "GO";
    $e->cep = "74000-000";

    //inserindo duas tabelas um pra um
    //$e->cliente_id = $c->id;
    $c->endereco()->save($e);
});

// Um pra muitos
Route::get('categorias/all', function(){
    $cats = Categoria::all();

    foreach ($cats as $c) {
        $produtos = $c->produtos;
        echo "<h1>".$c->nome."</h1><br>";

        foreach($produtos as $p){
            echo "<h2>".$p->nome."</h2><br>";
        }

    }
});

// muitos pra muitos
Route::get('desenvolvedores', function(){
    $dev = Desenvolvedor::with('projetos')->get();

    foreach ($dev as $d) {
        echo "<p>Nome: ".$d->nome.";</p>";
        echo "<p>Cargo: ".$d->cargo.";</p>";

        if( count($d->projetos) > 0 ){

            echo "<p>Projetos:</p>";
            echo "<ul>";

            foreach($d->projetos as $p){

                echo "<li>";
                echo "Nome: ".$p->nome.";</br>";
                echo "Horas estimadas: ".$p->estimativa_horas.";</br>";
                echo "Horas trabalhdas: ".$p->pivot->horas_semanais.";";
                echo "</li>";

            }

            echo "</ul>";

        }
    }

});

Route::get('desenvolvedores/{id}', function($id){
    $d = Desenvolvedor::find($id);

    echo "<p>Nome: ".$d->nome.";</p>";
    echo "<p>Cargo: ".$d->cargo.";</p>";

    if( count($d->projetos) > 0 ){

        echo "<p>Projetos:</p>";
        echo "<ul>";

        foreach($d->projetos as $p){

            echo "<li>";
            echo "Nome: ".$p->nome.";</br>";
            echo "Horas estimadas: ".$p->estimativa_horas.";</br>";
            echo "Horas trabalhdas: ".$p->pivot->horas_semanais.";";
            echo "</li>";

        }

        echo "</ul>";

    }

});
