@extends('layout')

@section('content')
    <h1>Detalhes do Cliente</h1>
    <ul>
        <li><strong>Nome:</strong> {{ $cliente->nome }}</li>
        <li><strong>Email:</strong> {{ $cliente->email }}</li>
    </ul>
    <a href="{{ route('clientes.index') }}">Voltar para a lista de clientes</a>
    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar Cliente</a>
@endsection
