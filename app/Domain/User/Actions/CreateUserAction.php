<?php

namespace Domain\User\Actions;

use Domain\User\DataTransferObjects\UserData;
use Domain\User\Models\User;

final class CreateUserAction
{
    
    public function __invoke(UserData $userData)
    {
        User::create([
            'name' => $userData->name,
            'email' => $userData->email,
            'password' => $userData->password,
        ]);
    }
    
}