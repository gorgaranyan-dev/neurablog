<?php

namespace App\Http\Controllers;

use App\Core\Redirect;
use App\Core\View;

class Controller
{
    protected function view($path, $data = [])
    {
        View::render($path, $data);

        return true;
    }

    protected function json(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    protected function redirect(): Redirect
    {
        return new Redirect();
    }
}