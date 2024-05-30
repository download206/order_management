@extends('layout.app')

@section('content')
    <h1>Criar novo {{ $resource }}</h1>
    
    <!-- Adicione o formulário de criação -->
    <form method="POST" action="{{ route($resource . '.store') }}">
        @csrf
        <!-- Adicione os campos do formulário -->
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
