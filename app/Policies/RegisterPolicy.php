<?php

namespace App\Policies;

use App\Registermail;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegisterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->role_id==1;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Registermail  $registermail
     * @return mixed
     */
    public function view(User $user, Registermail $registermail)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Registermail  $registermail
     * @return mixed
     */
    public function update(User $user, Registermail $registermail)
    {
        return $user->role_id==1;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Registermail  $registermail
     * @return mixed
     */
    public function delete(User $user, Registermail $registermail)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Registermail  $registermail
     * @return mixed
     */
    public function restore(User $user, Registermail $registermail)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Registermail  $registermail
     * @return mixed
     */
    public function forceDelete(User $user, Registermail $registermail)
    {
        //
    }
}
