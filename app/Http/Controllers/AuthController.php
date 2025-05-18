<?php

namespace App\Http\Controllers;

use App\Core\Http\Request;
use Exception;

class AuthController extends Controller{
	public function login(Request $request){
        try {
            return $this->view('auth.login');
        } catch ( Exception $e ){
            /// todo later
        }
	}
}