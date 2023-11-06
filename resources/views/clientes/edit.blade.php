@extends('layout')

@section('content')
    <h1>Editar Cliente</h1>
    <form method="post" action="{{ route('clientes.update', $cliente->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $cliente->email }}" required>
        </div>
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>
    <a href="{{ route('clientes.index') }}">Voltar para a lista de clientes</a>
@endsection
