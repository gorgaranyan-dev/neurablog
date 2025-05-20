<?php

namespace App\Services;

use App\Core\ConfigWriter;
use App\Database\Seeders\CoreSeeder;
use App\Http\Requests\Installer\PostRequest;
use Exception;
use PDO;
use PDOException;

class Installer
{
    private PostRequest $request;

    public function __construct(PostRequest $request)
    {
        $this->request = $request;
    }

    public function install(): bool
    {
        $data = $this->request->validated();

        // 1. Try DB connection
        $pdo = $this->testDatabaseConnection($data);

        // 2. Run database seeders
        $this->runSeeders($pdo);

        // 3. Create admin user
        $this->createAdminUser($pdo, $data);

        // 4. Write config file
        $this->writeConfig($data);

        return true;
    }

    private function testDatabaseConnection(array $data): PDO
    {
        $dsn = "mysql:host={$data['db_host']};port={$data['db_port']};dbname={$data['db_name']};charset=utf8mb4";

        try {
            return new PDO($dsn, $data['db_user'], $data['db_pass'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            throw new PDOException('Cannot connect to the database. Please check your database credentials.');
        }
    }

    private function runSeeders(PDO $pdo): void
    {
        try {
            (new CoreSeeder($pdo))->run();
        } catch (Exception $e) {
            throw new Exception('An unexpected error occurred during installation.');
        }
    }

    private function createAdminUser(PDO $pdo, array $data): void
    {
        $stmt = $pdo->prepare(
            "INSERT INTO users (name, email, password, is_admin, created_at) VALUES (?, ?, ?, 1, NOW())"
        );

        if ( ! $stmt->execute([
            $data['admin_name'],
            $data['admin_email'],
            password_hash($data['admin_password'], PASSWORD_BCRYPT),
        ])) {
            throw new Exception('Failed to create the admin user.');
        }
    }

    private function writeConfig(array $data): void
    {
        try {
            (new ConfigWriter())->write('config/config.php', [
                'db_host'   => $data['db_host'],
                'db_port'   => $data['db_port'],
                'db_name'   => $data['db_name'],
                'db_user'   => $data['db_user'],
                'db_pass'   => $data['db_pass'],
                'site_name' => $data['site_name'],
                'site_url'  => $data['site_url'],
            ]);
        } catch (Exception $e) {
            throw new Exception('Could not write to the config file. Please check file permissions.');
        }
    }
}