<?php

namespace App\Policies;

use App\Models\ServiceRequest;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceRequestPolicy
{
    use HandlesAuthorization;
    public function before(User $user, $abilities)
    {
        if ($user->type == 'super-admin') {

            return true;
        }
    }

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
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ServiceRequest $serviceRequest)
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
        return $user->hasAbility('message.createRelpy');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceRequest  $serviceRequest
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ServiceRequest $serviceRequest)
    {
        //
    }
}
