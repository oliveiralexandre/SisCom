<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moviment_produto_saldo extends Model
{
    protected $fillable = [
        'comanda', 'valor'
    ]; 
    public function moviment_produto(){
        return $this->belongsToMany(Moviment_produto::class);   
    }
}
