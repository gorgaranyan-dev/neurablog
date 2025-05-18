<?php

namespace App\Http\Requests\Installer;

use App\Core\Http\FormRequest;

class PostRequest extends FormRequest {

	public function rules(): array {
		return [
			// Database section
			'db_host'        => 'required',
			'db_name'        => 'required',
			'db_user'        => 'required',
			// db_pass is optional (some MySQL setups allow blank passwords)

			// Admin section
			'admin_email'    => 'required|email',
			'admin_password' => 'required|min:6|max:64',
		];
	}
}