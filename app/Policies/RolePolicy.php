<?php

namespace App\Policies;

use App\Helpers\Role as HelpersRole;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
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
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.view-all');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role  $role
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Role $role)
    {
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role  $role
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Role $role)
    {
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role  $role
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Role $role)
    {
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role  $role
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Role $role)
    {
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\role  $role
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Role $role)
    {
        if ($user->hasRole(HelpersRole::SUPER_ADMIN)) {
            return true;
        }
        return $user->can('role.force-delete');
    }
}
