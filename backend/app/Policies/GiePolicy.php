<?php

namespace App\Policies;

use App\Models\User;
use App\Models\gie;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class GiePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, gie $gie): bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, gie $gie): bool
    {
        return $user->id == $gie->owner_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, gie $gie): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, gie $gie): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, gie $gie): bool
    {
        return false;
    }
}
