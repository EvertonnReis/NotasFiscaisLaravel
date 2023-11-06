<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)   
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:clientes',
        ]);

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
