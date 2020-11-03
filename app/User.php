<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Access;
use Illuminate\Database\Eloquent\Model;
use App\Models\Papel;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Accesses()
    {
        // Não esqueça de usar a classe Access: use App\Models\Access;
        return $this->hasMany(Access::class);
    }
    public function registerAccess()
    {
    // Cadastra na tabela accesses um novo registro com as informações do usuário logado + data e hora
    return $this->accesses()->create([
        'user_id'   => $this->id,
        'name'   => $this->name,
        'cargo'   => $this->cargo,
        ]);
    }
    public function papeis()
    {
        return $this->belongsToMany(Papel::class);
    }
    public function adicionaPapel($papel)
    {
        if(is_string($papel)){
            return $this->papeis()->save(
                    Papel::where('nome','=',$papel)->firstOrFail()
                );
        }
        return $this->papeis()->save(
                Papel::where('nome','=',$papel->nome)->firstOrFail()
            );
    }
 
    public function removePapel($papel)
    {
        if(is_string($papel)){
            return $this->papeis()->detach(
                    Papel::where('nome','=',$papel)->firstOrFail()
                );
        }
        return $this->papeis()->detach(
                Papel::where('nome','=',$papel->nome)->firstOrFail()
            );
    }
 
    public function existePapel($papel)
    {
        if(is_string($papel)){
            return $this->papeis->contains('nome',$papel);
        }
 
        return $papel->intersect($this->papeis)->count();
    }
 
    public function existeAdmin()
    {
        return $this->existePapel('admin');
    }

}
