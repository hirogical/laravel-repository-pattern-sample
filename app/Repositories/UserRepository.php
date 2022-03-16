<?php

namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = User::withWhereHas('posts', function ($q) {
            $q->where('created_at', '>=', today());
        })->first();

        return $users;
    }
}
