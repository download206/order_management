@extends('layout.app')

@section('content')
    <h1>Listagem de Clientes</h1>
    
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Adicionar Cliente</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info">Detalhes</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
