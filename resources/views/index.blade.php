@extends('layout.app')

@section('body')

    <div class="row justify-content-center">

        <div class="card-deck">

            <div class="card">

                <div class="card-body">

                    <h5 class="card-title">Cadastro de cliente</h5>

                    <p class="card-text">
                        Aqui você cadastra todos os seus clientes.
                    </p>

                </div>

                <div class="card-footer">

                    <a href="{{ route('cliente.create') }}" class="btn">Cadastre Cliente</a>

                </div>

            </div>

        </div>

    </div>

@endsection