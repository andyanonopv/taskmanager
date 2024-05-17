<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tasks;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function view(User $user, Tasks $task)
    {
        return $user->id === $task->user_id || $user->role === 'admin';
    }

    public function update(User $user, Tasks $task)
    {
        return $user->id === $task->user_id || $user->role === 'admin';
    }

}
