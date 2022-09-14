@extends('layout.app')

@section('body')

    <div class="row justify-content-center">

        <h2 class="h2">Lista de cliente</h2>
    
    </div>

    <div class="row justify-content-center">

        @if ( count($cli) >0 )

        <table class="table table-borderless table-hover">

            <thead class="tb">

                <tr>

                    <th scope="col">Codigo</th>

                    <th scope="col">Nome</th>

                    <th scope="col">Endereço</th>

                    <th scope="col">Idade</th>

                    <th scope="col">Email</th>

                    <th scope="col">Editar</th>

                    <th scope="col">Apagar</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($cli as $c)

                <tr>

                    <th scope="row">{{ $c['id'] }}</th>

                    <td>{{ $c['nome'] }}</td>

                    <td>{{ $c['endereco'] }}</td>

                    <td>{{ $c['idade'] }}</td>

                    <td>{{ $c['email'] }}</td>

                    <td>

                        <a href="{{ route('cliente.edit', $c['id'] ) }}" class="btn">Editar</a>

                    </td>

                    <td>

                        <form action="{{ route('cliente.destroy', $c['id'] ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Apagar</button>
                        </form>
                        
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>
            
        @else

        <h1>Não há cliente</h1>
            
        @endif
    
    </div>
    
    <div class="row justify-content-center">

        <a href="{{ route('cliente.create') }}" class="btn">Nova cliente</a>

    </div>
    
@endsection