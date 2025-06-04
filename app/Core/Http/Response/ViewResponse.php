<?php

namespace App\Core\Http\Response;

use App\Core\View;
use App\Interfaces\ResponseInterface;

class ViewResponse implements ResponseInterface
{
    private string $path;
    private array $data;

    public function __construct(string $path, array $data)
    {
        $this->path = $path;
        $this->data = $data;
    }

    public function send()
    {
        View::render($this->path, $this->data);
    }
}