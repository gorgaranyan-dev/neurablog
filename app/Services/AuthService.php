<?php

namespace App\Services;

use App\Core\Database;
use PDO;
use Exception;

class AuthService
{
    public static function login(array $credentials)
    {
        $email    = $credentials['email'] ?? null;
        $password = $credentials['password'] ?? null;
        try {
            $pdo = Database::getInstance()->getConnection();

            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ( ! $user || ! password_verify($password, $user['password'])) {
                throw new Exception('Invalid email or password.');
            }

            // Login success: store user in session
            $_SESSION['user'] = [
                'id'       => $user['id'],
                'name'     => $user['name'],
                'email'    => $user['email'],
                'is_admin' => (bool)$user['is_admin']
            ];
        } catch (Exception $e) {
            throw new Exception('Something went wrong. Please try again later.');
        }
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
}
