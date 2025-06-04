<?php

use App\Core\Http\Response\JsonResponse;
use App\Core\Http\Response\RedirectResponse;
use App\Core\Http\Response\ViewResponse;
use App\Core\View;

function view($path, $data = [])
{
    return new ViewResponse($path, $data);
}

function json(array $data, int $status = 200): JsonResponse
{
    return new JsonResponse($data, $status);
}

function redirect(): RedirectResponse
{
    return new RedirectResponse();
}