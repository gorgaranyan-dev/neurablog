<?php

namespace App\Database\Seeders;

use PDO;

class CoreSeeder
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function run(): void
    {
        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                is_admin TINYINT(1) DEFAULT 0,
                created_at DATETIME NOT NULL
            );
        ");

        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS user_meta (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                meta_key VARCHAR(255) NOT NULL,
                meta_value TEXT,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            );
        ");

        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS settings (
                id INT AUTO_INCREMENT PRIMARY KEY,
                setting_key VARCHAR(255) NOT NULL UNIQUE,
                setting_value TEXT
            );
        ");

        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS posts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                title VARCHAR(255) NOT NULL,
                slug VARCHAR(255) NOT NULL UNIQUE,
                content TEXT,
                status ENUM('draft', 'published') DEFAULT 'draft',
                created_at DATETIME NOT NULL,
                updated_at DATETIME NULL,
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            );
        ");

        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS post_meta (
                id INT AUTO_INCREMENT PRIMARY KEY,
                post_id INT NOT NULL,
                meta_key VARCHAR(255) NOT NULL,
                meta_value TEXT,
                FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
            );
        ");
    }
}
