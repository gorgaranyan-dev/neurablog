<?php

namespace App\Http\Controllers;

use App\Core\View;

class Controller
{
    protected function view($path, $data = [])
    {
        View::render($path, $data);

        return true;
    }
}