<?php

namespace App\Core\Exceptions;

use Exception;

class UnauthorizedException extends Exception {
	protected array $errors;

	public function __construct( $message = 'Unauthorized' ) {
		parent::__construct( $message );
	}
}