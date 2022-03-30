<?php

namespace Domain\User\DataTransferObjects;

use App\Api\User\Requests\UserRequest;
use Spatie\DataTransferObject\DataTransferObject;

class UserData extends DataTransferObject
{

    /** @var string */
    public $name;

    /** @var string */
    public $email;

    /** @var string */
    public $password;

    public static function fromRequest(UserRequest $userRequest) : UserData 
    {
        return new Self([
            'name' => $userRequest['name'],
            'email' => $userRequest['email'],
            'password' => $userRequest['password'],
        ]);
    }


}