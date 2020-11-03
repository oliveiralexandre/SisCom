<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Atendente extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'remember_token'
    ];
}
