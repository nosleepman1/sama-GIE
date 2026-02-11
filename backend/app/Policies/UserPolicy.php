<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        
    }

    public function update(User $user, User $otherUser)
    {
        return $user->id === $otherUser->id;
    }

    public function delete(User $user, User $otherUser)
    {
        return $user->id === $otherUser->id;
    }

    public function view(User $user, User $otherUser)
    {
        return $user->id === $otherUser->id;
    }

    public function viewAny(User $user)
    {
        return $user->role === 'admin' || $user->role === 'director';
    }
}
