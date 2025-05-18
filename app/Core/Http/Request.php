<?php

namespace App\Core\Http;

class Request
{
	protected array $get;
	protected array $post;
	protected array $server;
	protected array $files;
	protected array $cookies;
	protected array $input;

	public function __construct()
	{
		$this->get     = $_GET;
		$this->post    = $_POST;
		$this->server  = $_SERVER;
		$this->files   = $_FILES;
		$this->cookies = $_COOKIE;

		$this->input = array_merge($this->get, $this->post);
	}

	public function input(string $key, $default = null)
	{
		return $this->input[$key] ?? $default;
	}

	public function post(string $key, $default = null)
	{
		return $this->post[$key] ?? $default;
	}

	public function get(string $key, $default = null)
	{
		return $this->get[$key] ?? $default;
	}

	public function method(): string
	{
		return strtoupper($this->server['REQUEST_METHOD'] ?? 'GET');
	}

	public function uri(): string
	{
		return strtok($this->server['REQUEST_URI'] ?? '/', '?');
	}

	public function isPost(): bool
	{
		return $this->method() === 'POST';
	}

	public function isAjax(): bool
	{
		return strtolower($this->server['HTTP_X_REQUESTED_WITH'] ?? '') === 'xmlhttprequest';
	}

	public function all(): array
	{
		return $this->input;
	}

	public function file(string $key): ?array
	{
		return $this->files[$key] ?? null;
	}

	public function server( string $string ) {
		return $_SERVER[$string] ?? null;
	}
}
