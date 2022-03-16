<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserIndexResource;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        try {
            $users = UserIndexResource::collection(
                $this->userService->getUsers()
            );

            return view('user.index')->with('users', $users);
        } catch (\Exception $ex) {
            logger($ex->getMessage());

            return response()->json([$ex->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
