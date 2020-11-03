<?php
 
namespace App\Policies;
 
use App\User;
//use App\Models\Atendente;
use Illuminate\Auth\Access\HandlesAuthorization;
 
class AtendentePolicy
{
    use HandlesAuthorization;

    public function update(User $user)
    {
        return $user->cargo === "GERENTE";
    }

}