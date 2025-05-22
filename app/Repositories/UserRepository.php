<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function findByEmail($email): ?User
    {
        $user = User::where('email', '=', $email);

        return ! $user->isEmpty() ? $user->first() : null;
    }
}