<?php

namespace App\Api\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules() : array
    {
        return [
            //'name' => 'string',
            'email' => 'required|unique:users',
            'password' => 'required|string|confirmed'
        ];
    }
}


