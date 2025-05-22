<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;

class AuthService
{
    protected UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public static function logout(): void
    {
        unset($_SESSION['user']);
    }

    public static function user(): ?array
    {
        return $_SESSION['user'] ?? null;
    }

    public static function isAdmin(): bool
    {
        return self::check() && ! empty($_SESSION['user']['is_admin']);
    }

    public static function check(): bool
    {
        return isset($_SESSION['user']);
    }

    public function login(array $credentials)
    {
        $email    = $credentials['email'] ?? null;
        $password = $credentials['password'] ?? null;
        try {
            $user = $this->userRepository->findByEmail($email);
            if ( ! $user || ! password_verify($password, $user->getPassword())) {
                throw new Exception('Invalid email or password.');
            }
            // Login success: store user in session
            $_SESSION['user'] = [
                'id'       => $user->getId(),
                'name'     => $user->getName(),
                'email'    => $user->getEmail(),
                'is_admin' => $user->getIsAdmin(),
            ];
        } catch (Exception $e) {
            throw new Exception('Something went wrong. Please try again later.');
        }
    }
}
