@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Detalhes do ') . $resource }}</div>

                    <div class="card-body">
                        <p>ID: {{ $item->id }}</p>
                        <p>Nome: {{ $item->name }}</p>
                        <!-- Adicione mais detalhes conforme necessário -->
                        <a href="{{ route($resource . '.index') }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
