@extends('layout.app')

@section('content')
    <h1>Detalhes do {{ $resource }}</h1>
    
    <!-- Exibir os detalhes do item -->
    <p>ID: {{ $item->id }}</p>
    <p>Nome: {{ $item->name }}</p>
    <!-- Adicione mais detalhes conforme necessário -->
    <a href="{{ route($resource . '.index') }}" class="btn btn-primary">Voltar</a>
@endsection
