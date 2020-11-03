<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Fechamento;
use App\Moviment_produto;
use Illuminate\Support\Facades\DB;

class Caixa extends Model
{
    protected $fillable = [
        'id', 'user_id','data_abertura', 'data_fechamento', 'valorinicial', 'status_id', 'numerocaixa'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function aberturacaixa()
    {
        $aberturacaixa = $this->join('users', 'users.id', '=', 'caixas.user_id')
                    ->join('status', 'statusID', '=', 'caixas.status_id')->where('caixas.status_id', 1)
                    ->where('users.id', auth()->user()->id)
                    ->first();
    // Se precisa de apenas um único resultado use o método first() no lugar do get();
    // Se precisar debugar essa query, troque por toSql() no lugar do get() e debug a variável dd($results);
    //dd($results);
       return $aberturacaixa;
    }    

    public function fechamento(){
        return $this->belongsToMany(Fechamento::class);   
    }    
    public function moviment_produto(){
        return $this->hasOne(Moviment_produto::class);   
    }     
       
}
