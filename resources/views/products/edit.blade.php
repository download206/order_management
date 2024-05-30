@extends('layout.app')

@section('content')
    <h1>Editar {{ $resource }}</h1>
    
    <!-- Adicione o formulário de edição -->
    <form method="POST" action="{{ route($resource . '.update', $item->id) }}">
        @csrf
        @method('PUT')
        <!-- Adicione os campos do formulário com os valores atuais -->
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
    </form>
@endsection
