<?php

namespace App\Policies;

use App\User;
//use App\Models\Atendente;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaixaPolicy
{
    use HandlesAuthorization;
    
    public function caixa(User $user)
    {
        return $user->cargo === "CAIXA";
    }
}
