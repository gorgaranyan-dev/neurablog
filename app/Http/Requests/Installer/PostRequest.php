<?php

namespace App\Http\Requests\Installer;

use App\Core\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            // Step 1: Database Setup
            'db_host'                => 'required',
            'db_port'                => 'required|numeric',
            'db_name'                => 'required',
            'db_user'                => 'required',

            // Step 2: Site Setup
            'site_name'              => 'required',
            'site_url'               => 'required|url',

            // Step 3: Admin Account
            'admin_name'             => 'required',
            'admin_email'            => 'required|email',
            'admin_password'         => 'required|min:6|max:64',
            'admin_password_confirm' => 'required|same:admin_password',
        ];
    }

}