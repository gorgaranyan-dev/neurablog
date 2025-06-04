<?php

namespace App\Core\Http\Response;

use App\Interfaces\ResponseInterface;

class JsonResponse implements ResponseInterface
{
    public $data;
    public ?int $status;

    public function __construct($data, $status = 200)
    {
        $this->data   = $data;
        $this->status = $status;
    }

    public function send()
    {
        http_response_code($this->status);
        header('Content-Type: application/json');
        echo json_encode($this->data);
        exit;
    }
}