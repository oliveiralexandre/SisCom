<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balcao extends Model
{
    protected $table = 'moviment_produtos';

    protected $fillable = [
        'moviment_id', 'produto_id','valor', 'comanda', 'cliente_id', 'produto', 'usuariocadastrou'
    ];

    public function produto(){
        return $this->belongsToMany(Produto::class);   
    } 
    public function moviment_produto(){
        return $this->belongsToMany(Moviment_produto::class);   
    }  
}
