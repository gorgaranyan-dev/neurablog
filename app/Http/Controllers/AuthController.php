<?php

namespace App\Http\Controllers;

use App\Core\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use Exception;

class AuthController extends Controller
{
    public function loginView(Request $request)
    {
        try {
            return $this->view('auth.login');
        } catch (Exception $e) {
            /// todo later
        }
    }

    public function login(Request $request)
    {
        try {
            $form = new LoginRequest($request);
            AuthService::login($form->validated());

            return $this->redirect()->to('/dashboard')->send();
        } catch (Exception $e) {
            $this->redirect()->back()->withInput()->with('error', $e->getMessage())->send();
        }
    }
}