<?php

namespace App\Core;

class Validator
{
	protected array $data;
	protected array $rules;
	protected array $errors = [];

	public function __construct(array $data, array $rules)
	{
		$this->data  = $data;
		$this->rules = $rules;
	}

	public function validate(): bool
	{
		foreach ($this->rules as $field => $ruleSet) {
			$value = trim($this->data[$field] ?? '');

			// Accept string pipe rules or array of rules
			$rules = is_string($ruleSet) ? explode('|', $ruleSet) : $ruleSet;

			foreach ($rules as $rule) {
				[$ruleName, $param] = array_pad(explode(':', $rule, 2), 2, null);

				if (! $this->applyRule($field, $value, $ruleName, $param)) {
					// Continue validating to collect all errors
				}
			}
		}

		return empty($this->errors);
	}

	protected function applyRule(string $field, $value, string $rule, ?string $param): bool
	{
		switch ($rule) {
			case 'required':
				if ($value === '') {
					return $this->fail($field, 'This field is required.');
				}
				break;

			case 'email':
				if ($value !== '' && ! filter_var($value, FILTER_VALIDATE_EMAIL)) {
					return $this->fail($field, 'Invalid email address.');
				}
				break;

			case 'min':
				if ($value !== '' && mb_strlen($value) < (int) $param) {
					return $this->fail($field, "Minimum length is $param characters.");
				}
				break;

			case 'max':
				if ($value !== '' && mb_strlen($value) > (int) $param) {
					return $this->fail($field, "Maximum length is $param characters.");
				}
				break;

			case 'numeric':
				if ($value !== '' && ! is_numeric($value)) {
					return $this->fail($field, 'This field must be numeric.');
				}
				break;

			case 'alpha':
				if ($value !== '' && ! ctype_alpha($value)) {
					return $this->fail($field, 'This field must contain only letters.');
				}
				break;

			case 'alphanum':
			case 'alpha_num':
				if ($value !== '' && ! ctype_alnum($value)) {
					return $this->fail($field, 'This field must contain only letters and numbers.');
				}
				break;

			case 'regex':
				if ($value !== '' && ! preg_match($param, $value)) {
					return $this->fail($field, 'Invalid format.');
				}
				break;

			case 'same':
				if ($value !== ($this->data[$param] ?? '')) {
					return $this->fail($field, "This field must match $param.");
				}
				break;

			case 'confirmed':
				if ($value !== ($this->data["{$field}_confirmation"] ?? '')) {
					return $this->fail($field, 'Confirmation does not match.');
				}
				break;

			case 'in':
				$allowed = explode(',', $param);
				if (! in_array($value, $allowed)) {
					return $this->fail($field, 'Invalid value selected.');
				}
				break;

			case 'url':
				if ($value !== '' && ! filter_var($value, FILTER_VALIDATE_URL)) {
					return $this->fail($field, 'Invalid URL.');
				}
				break;

			case 'bool':
			case 'boolean':
				if (! in_array($value, ['0', '1', 0, 1, true, false], true)) {
					return $this->fail($field, 'This field must be true or false.');
				}
				break;

			case 'csrf':
				if (
					! isset($_SESSION['_csrf_token']) ||
					! hash_equals($_SESSION['_csrf_token'], $value)
				) {
					return $this->fail($field, 'Invalid CSRF token.');
				}
				break;

			default:
				// Optional: Support for closure-based custom rules
				if (is_callable($rule)) {
					return $rule($field, $value, $this) !== false;
				}
				break;
		}

		return true;
	}

	protected function fail(string $field, string $message): bool
	{
		$this->errors[$field][] = $message;
		return false;
	}

	public function errors(): array
	{
		return $this->errors;
	}

	public function passes(): bool
	{
		return $this->validate();
	}

	public function fails(): bool
	{
		return ! $this->validate();
	}
}
