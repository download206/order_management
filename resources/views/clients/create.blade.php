@extends('layout.app')

@section('content')
    <h1>Criar novo Cliente</h1>
    
    <!-- Verificar se há uma mensagem de sucesso e exibi-la -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulário para criar um novo cliente -->
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf <!-- Token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
        
        <button type="submit">Criar Cliente</button>
    </form>
@endsection
