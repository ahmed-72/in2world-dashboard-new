<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashboardPolicy
{
    use HandlesAuthorization;
    public function before(User $user, $abilities)
    {
        if ($user->type == 'super-admin') {

            return true;
        }
    }

    public function dashboard(User $user)
    {
        return $user->hasAbility('dashboard.view');
    }
}
