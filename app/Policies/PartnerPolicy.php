<?php

namespace App\Policies;

use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerPolicy
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
        return $user->hasAbility('partner.view');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Partner $partner)
    {
        return $user->hasAbility('partner.view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAbility('partner.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Partner $partner)
    {
        return $user->hasAbility('partner.edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Partner $partner)
    {
        return $user->hasAbility('partner.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Partner $partner)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Partner $partner)
    {
        //
    }
}
