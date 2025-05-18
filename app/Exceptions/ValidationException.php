<?php

namespace App\Core\Exceptions;

use Exception;

class ValidationException extends Exception
{
	protected array $errors;
	protected array $old;

	public function __construct(array $errors, array $old = [])
	{
		parent::__construct('Validation failed.');
		$this->errors = $errors;
		$this->old = $old;
	}

	public function getErrors(): array
	{
		return $this->errors;
	}

	public function getOldInput(): array
	{
		return $this->old;
	}
}
