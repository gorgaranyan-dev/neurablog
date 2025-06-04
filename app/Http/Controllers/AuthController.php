<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use App\Core\Http\Request\Request;
use Exception;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function loginView(Request $request)
    {
        try {
            if ($this->authService::check()) {
                return redirect()->to('dashboard');
            }

            return view('auth.login');
        } catch (Exception $e) {
            return view('errors.404');
        }
    }

    public function login(Request $request)
    {
        try {
            $form = new LoginRequest($request);
            $this->authService->login($form->validated());

            return redirect()->to('/dashboard');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}