<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $fillable = [
        'user_id', 'categoria'
    ];
}
