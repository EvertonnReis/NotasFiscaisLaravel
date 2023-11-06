@extends('layout')

@section('content')
    <h1>Lista de Clientes</h1>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{ route('clientes.show', $cliente->id) }}">{{ $cliente->nome }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Adicionar Cliente</a>
@endsection
