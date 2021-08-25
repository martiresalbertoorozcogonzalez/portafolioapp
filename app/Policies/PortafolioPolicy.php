<?php

namespace App\Policies;

use App\Models\Portafolio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PortafolioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Portafolio $portafolio)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Portafolio $portafolio)
    {
         //Revisa si el usuario autenticadp es el mismo que creo el portafolio
         return $user->id === $portafolio->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Portafolio $portafolio)
    {
        //Revisa si el usuario que elimina es el mismo que lo creo
        return $user->id === $portafolio->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Portafolio $portafolio)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Portafolio $portafolio)
    {
        //
    }
}
