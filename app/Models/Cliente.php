<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'user_id', 'datetime','nome', 'rg', 'cpf', 'endereco', 'telefone', 'email', 'observacao', 'ativo'
    ];

}