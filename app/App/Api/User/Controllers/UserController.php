<?php

namespace App\Api\User\Controllers;

use App\Api\User\Requests\UserRequest;
use App\Core\Http\Controllers\Controller;
use Domain\User\Actions\CreateUserAction;
use Domain\User\DataTransferObjects\UserData;
use Domain\User\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();

        return response()->json($users);
    }

    public function store(UserRequest $request, CreateUserAction $creteUserAction)
    {
        $data = UserData::fromRequest($request);

        $creteUserAction($data);
        dd($data);
    }
}
