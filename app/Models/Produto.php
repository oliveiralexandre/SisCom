<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'codigoproduto', 'categoria', 'produto', 'estoque', 'valor'
    ];

    public function moviment_produto(){
        return $this->belongsToMany(Moviment_produto::class);   
    }  
}
