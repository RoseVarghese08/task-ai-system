<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;

class TaskPolicy
{
    /**
     * Determine whether the user can view the task.
     */
    public function view(User $user, Task $task)
    {
        return $user->id === $task->assigned_to || $user->role === 'admin';
    }

    /**
     * Determine whether the user can update the task.
     */
    public function update(User $user, Task $task)
    {
        return $user->id === $task->assigned_to || $user->role === 'admin';
    }

    /**
     * Determine whether the user can delete the task.
     */
    public function delete(User $user, Task $task)
    {
        return $user->role === 'admin';
    }
}