<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function delete(User $user, User $model): Response
    {
        return $user->id !== $model->id
            ? Response::allow()
            : Response::denyWithStatus(404);
    }
}
