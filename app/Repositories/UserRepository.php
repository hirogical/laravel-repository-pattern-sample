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
        // $users = User::with('posts')
        //     ->whereHas('posts', function ($q) {
        //         $q->where('created_at', '>=', today());
        //     })->find(1);

        $users = User::whereHas('posts', function ($q) {
            $q->where('created_at', '>=', today());
        })->find(1);

        // dd($users->first()->posts);

        // foreach ($users as $user) {
        //     dd($user->posts);
        // }

        // $users = $this->user::withWhereHas('posts', function ($q) {
        //     $q->where('created_at', '>=', today());
        // })->get();

        // $users = User::withWhereHas('posts', function ($q) {
        //     $q->where('created_at', '>=', today());
        // })->first();

        return $users;
    }
}
