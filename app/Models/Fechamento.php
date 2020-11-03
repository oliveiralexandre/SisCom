<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fechamento extends Model
{
    protected $fillable = [
        'caixa_abertura_id', 'user_id','forma_pagamento_id', 'valordinheiro', 'valorcartao'
    ];

    public function fechamentocaixa()
    {
        $fechamentocaixa = $this->join('users', 'users.id', '=', 'caixas.user_id')
                    ->join('status', 'statusID', '=', 'caixas.status_id')->where('caixas.status_id', 1)
                    ->where('users.id', auth()->user()->id)
                    ->first();
    // Se precisa de apenas um único resultado use o método first() no lugar do get();
    // Se precisar debugar essa query, troque por toSql() no lugar do get() e debug a variável dd($results);
    //dd($results);
       return $fechamentocaixa;
    }     
}