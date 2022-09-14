@extends('layout.app')

@section('body')

    <div class="card">

        <div class="card-header">
                    
            Cadastro

        </div>

        <div class="card-body">

            <form action="{{ route('cliente.update', $cli['id'] ) }}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="form-group">

                    <label for="nome">Nome do cliente</label>

                    <input type="text" id="nome" class="form-control" name="nome" value="{{ $cli['nome'] }}" placeholder="Nome...">

                </div>
            
                <div class="form-group">

                    <label for="idade">Idade do cliente</label>

                    <input type="text" id="idade" class="form-control" name="idade" value="{{ $cli['idade'] }}" placeholder="idade...">

                </div>
            
                <div class="form-group">

                    <label for="endereco">Endereço do cliente</label>

                    <input type="text" id="endereco" class="form-control" name="endereco" value="{{ $cli['endereco'] }}" placeholder="endereco...">

                </div>
            
                <div class="form-group">

                    <label for="email">Email do cliente</label>

                    <input type="text" id="email" class="form-control" name="email" value="{{ $cli['email'] }}" placeholder="email...">

                </div>

                <button type="submit" class="btn">Salvar</button>

                <button type="cancel" class="btn">Cancelar</button>
            
            </form>

        </div>

    </div>

@endsection