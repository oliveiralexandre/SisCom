<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\Models\Permissao;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
      // '\App\User' => 'App\Policies\AtendentePolicy',

    ];

   
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //$gate->define('listar-usuarios',
            //function($user,$permissao){
                //return true == $permissao ;
            //}
        //);

        foreach ($this->getPermissoes() as $permissao) {
            $gate->define($permissao->nome,
                function($user) use($permissao){
                    return $user->existePapel($permissao->papeis) || $user->existeAdmin();
                }
            );
        }
        
    }

    public function getPermissoes()
    {
        return Permissao::with('papeis')->get();
    }
   
    
}
