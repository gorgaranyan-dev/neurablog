<?php

namespace App\Core\Http\Response;

use App\Interfaces\ResponseInterface;

class RedirectResponse implements ResponseInterface
{
    protected string $url;
    protected int $status = 302;
    protected array $errors = [];
    protected array $old = [];

    public function __construct()
    {
        unset($_SESSION['_validation_errors']);
        unset($_SESSION['_old_input']);
        unset($_SESSION['_response']);
    }

    public function to(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function back(): self
    {
        $this->url = $_SERVER['HTTP_REFERER'] ?? '/';

        return $this;
    }

    public function withErrors(array $errors): self
    {
        $_SESSION['_validation_errors'] = $errors;

        return $this;
    }

    public function withInput(array $input = []): self
    {
        if (empty($input)) {
            $input = $_POST; // fallback to post input
        }
        $_SESSION['_old_input'] = $input;

        return $this;
    }

    public function with(...$args): self
    {
        if ( ! empty($args[0]) && is_array($args[0])) {
            $_SESSION['_response'] = $args;
        } elseif ( ! empty($args[0]) && ! empty($args[1]) && is_string($args[0])) {
            $_SESSION['_response'][$args[0]] = $args[1];
        }

        return $this;
    }

    public function withStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function send()
    {
        http_response_code($this->status);
        header("Location: {$this->url}");
        exit;
    }
}