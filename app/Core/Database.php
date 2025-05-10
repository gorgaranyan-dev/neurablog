<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {

	private static ?Database $instance = null;
	private PDO $pdo;

	private function __construct() {
		$this->definePdo();
	}

	private function definePdo() {
		try {
			$config    = require __DIR__ . '/../../config/config.php';
			$dsn = "mysql:host={$config['db']['host']};port={$config['db']['port']};dbname={$config['db']['name']};charset=utf8mb4";
			$this->pdo = new PDO( $dsn, $config['db']['user'], $config['db']['pass'], [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			] );
		} catch ( PDOException $e ) {
			die( 'Database connection failed: ' . $e->getMessage() );
		}
	}

	public static function getInstance( ?array $config = null ): ?Database {
		if ( self::$instance === null ) {
			self::$instance = new self( $config );
		}

		return self::$instance;
	}

	public function getConnection(): PDO {
		return $this->pdo;
	}
}