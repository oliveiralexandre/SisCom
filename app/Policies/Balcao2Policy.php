<?php

namespace App\Policies;

use App\User;
//use App\Models\Atendente;
use Illuminate\Auth\Access\HandlesAuthorization;

class Balcao2Policy
{
    use HandlesAuthorization;
    
    public function balcao(User $user)
    {
        return $user->cargo === "BALCAO";
    }
}
