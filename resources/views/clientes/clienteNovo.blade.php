@extends('layout.app')

@section('body')

    <div class="card">

        <div class="card-header">

            Cadastro

        </div>

        <div class="card-body">

            <form action="{{ route('cliente.store') }}" method="POST">

                @csrf

                <div class="form-group">

                    <label for="nome">Nome do cliente</label>

                    <input type="text" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" placeholder="Nome...">

                    @if ($errors->has('nome'))

                        <div class="invalid-feedback">

                            {{ $errors->first('nome') }}

                        </div>

                    @endif

                </div>

                <div class="form-group">

                    <label for="idade">Idade do cliente</label>

                    <input type="number" id="idade" class="form-control" name="idade" placeholder="idade...">

                </div>

                <div class="form-group">

                    <label for="endereco">Endereço do cliente</label>

                    <input type="text" id="endereco" class="form-control" name="endereco" placeholder="endereco...">

                </div>

                <div class="form-group">

                    <label for="telefone">Endereço do telefone</label>

                    <input type="text" id="telefone" class="form-control" name="telefone" placeholder="telefone...">

                </div>

                <div class="form-group">

                    <label for="email">Email do cliente</label>

                    <input type="text" id="email" class="form-control" name="email" placeholder="email...">

                </div>

                <button type="submit" class="btn">Salvar</button>

                <button type="cancel" class="btn">Cancelar</button>

            </form>

        </div>
        @if ($errors->any())

        <div class="card-footer">

            @foreach ($errors->all() as $e)

            <div class="alert alert-danger" role="alert">

                {{ $e }}

            </div>

            @endforeach

        </div>

        @endif

    </div>

    @if (isset($errors))

    {{ var_dump($errors) }}

    @endif

@endsection
