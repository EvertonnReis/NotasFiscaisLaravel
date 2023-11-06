<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Nome da tabela personalizada, se necessário

    protected $fillable = ['nome', 'email']; // Campos preenchíveis em massa

    // Relacionamento com Vendas
    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }

    // Regras de validação
    public static $rules = [
        'nome' => 'required',
        'email' => 'required|email|unique:clientes',
    ];
}
