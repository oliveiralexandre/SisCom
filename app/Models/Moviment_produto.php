<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moviment_produto extends Model
{
    protected $fillable = [
        'moviment_id', 'produto_id', 'produto', 'valor', 'comanda', 'cliente_id'
    ];  

    public function produto(){
        return $this->belongsToMany(Produto::class);   
    }  
    public function moviment_produto_saldo(){
        return $this->belongsToMany(Moviment_produto_saldo::class);   
    }  
}
