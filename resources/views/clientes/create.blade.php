@extends('layout')

@section('content')
    <h1>Adicionar Cliente</h1>
    <form method="post" action="{{ route('clientes.store') }}">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
    <button><a href="{{ route('clientes.index') }}">Voltar para a lista de clientes</a></button>
@endsection
    