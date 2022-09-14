<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cli = Cliente::all();
        return view('clientes/clientes', compact('cli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes/clienteNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validação de dados
        $regras = [
            'nome' => 'required|min:1|max:30',
            'email' => 'required|unique:clientes|email',
            'idade' => ' required',
            'endereco' => ' required',
            'telefone' => 'required'
        ];

        $mensagens = [
            'required' => 'O :attribute não pode estar em branco',
            'nome.required' => 'O nome é requerido',
            'email.email' => 'O email tem que ser existente',
            'email.unique' => 'O email tem que ser unico',
            'telefone.required' => 'O telefone é requerido',
        ];

        $request->validate($regras, $mensagens);

        /*
        $request->validate([
            'nome' => 'required|min:1|max:20',
            'email' => 'required|unique:clientes|email',
            'idade' => ' required',
            'endereco' => ' required'
        ]);
        */

        $cli = new Cliente();
        /*
        $cli->nome = $request->input('nome');
        $cli->idade = $request->input('idade');
        $cli->endereco = $request->input('endereco');
        $cli->email = $request->input('email');

        $cli->save();
        */
        $cli = Cliente::create([
            "nome" => $request->input('nome'),
            "idade" => $request->input('idade'),
            "endereco" => $request->input('endereco'),
            "email" => $request->input('email'),
            "telefone" => $request->input('telefone')
        ]);

        return redirect()->route('cliente.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cli = Cliente::find($id);
        return view('clientes/clienteEditar', compact('cli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
        $cli = Cliente::find($id);

        if ( isset( $cli ) ) {

            $cli->nome = $request->input('nome');
            $cli->idade = $request->input('idade');
            $cli->endereco = $request->input('endereco');
            $cli->email = $request->input('email');
            $cli->save();

        }

        return redirect()->route('cliente.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
        $cli = Cliente::find($id);

        if ( isset( $cli ) ) {

            $cli->delete();

        }

        return redirect()->route('cliente.index');

    }
}
