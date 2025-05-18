<?php

namespace App\Core\Http;

use App\Core\Validator;

abstract class FormRequest {
	protected Request $request;
	protected Validator $validator;

	public function __construct( Request $request ) {
		$this->request = $request;
	}

	public function validated() {
		if ( $this->validate() ) {
			return $this->all();
		}

		return false;
	}

	public function validate(): bool {
		if ( ! $this->authorize() ) {
			$this->redirectBack( 403 );
			return false;
		}

		$this->validator = new Validator( $this->request->all(), $this->rules() );

		if ( ! $this->validator->validate() ) {
			$this->flashValidationData();
			$this->redirectBack( 422 );
			return false;
		}

		return true;
	}

	public function authorize(): bool {
		// Override if you want to restrict access
		return true;
	}

	protected function redirectBack( int $statusCode = 302 ): void {
		$referer = $this->request->server( 'HTTP_REFERER' ) ?? '/';

		http_response_code( $statusCode );
		header( "Location: $referer" );
		exit;
	}

	public function all(): array {
		return $this->request->all();
	}

	abstract public function rules(): array;

	protected function flashValidationData(): void {
		$_SESSION['_validation_errors'] = $this->validator->errors();
		$_SESSION['_old_input']         = $this->request->all();
	}

	public function errors(): array {
		return $this->validator->errors() ?? [];
	}

	public function input( string $key, $default = null ) {
		return $this->request->input( $key, $default );
	}
}
