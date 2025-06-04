<?php

namespace App\Http\Requests\Auth;

use App\Core\Http\Request\FormRequest;

class LoginRequest extends FormRequest
{

    public function rules(): array
    {
        return array(
            'email'    => 'required|string|email',
            'password' => 'required|string',
        );
    }
}