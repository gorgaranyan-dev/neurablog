<?php

namespace App\Core;

class Router
{
    private array $routes = [
        'GET'    => [],
        'POST'   => [],
        'PUT'    => [],
        'DELETE' => [],
    ];

    private string $notFoundHandler;

    public function get(string $uri, $action): void
    {
        $this->addRoute('GET', $uri, $action);
    }

    private function addRoute(string $method, string $uri, $action): void
    {
        $uri                         = $this->normalizeUri($uri);
        $this->routes[$method][$uri] = $action;
    }

    private function normalizeUri(string $uri): string
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        return rtrim($uri, '/') ?: '/';
    }

    public function post(string $uri, $action): void
    {
        $this->addRoute('POST', $uri, $action);
    }

    public function put(string $uri, $action): void
    {
        $this->addRoute('PUT', $uri, $action);
    }

    public function delete(string $uri, $action): void
    {
        $this->addRoute('DELETE', $uri, $action);
    }

    public function fallback(callable $handler): void
    {
        $this->notFoundHandler = $handler;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri    = $this->normalizeUri($_SERVER['REQUEST_URI']);

        // Serve static public if the URI starts with /public
        if (strpos($uri, '/public/') === 0) {
            $this->serveStaticFile($uri);

            return;
        }

        // If not a static asset, handle the normal route
        $action = $this->routes[$method][$uri] ?? null;
        if ($action) {
            $request = new Request();
            if (is_array($action)) {
                [$controller, $methodName] = $action;
                if (class_exists($controller) && method_exists($controller, $methodName)) {
                    $controller = new $controller();
                    $controller->$methodName($request);
                } else {
                    $this->send404("Method '{$methodName}' not found in controller '{$controller}'");
                }
            } elseif (is_callable($action)) {
                $action($request);
            }
        } else {
            $this->send404();
        }
    }

    private function serveStaticFile($uri): void
    {
        $filePath = $_SERVER['DOCUMENT_ROOT'].$uri;
        if (file_exists($filePath)) {
            $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);

            // Set correct content type for CSS, JS, etc.
            switch ($fileExtension) {
                case 'css':
                    header('Content-Type: text/css');
                    break;
                case 'js':
                    header('Content-Type: application/javascript');
                    break;
                case 'jpg':
                case 'jpeg':
                    header('Content-Type: image/jpeg');
                    break;
                case 'png':
                    header('Content-Type: image/png');
                    break;
                case 'gif':
                    header('Content-Type: image/gif');
                    break;
                default:
                    header('Content-Type: application/octet-stream');
            }

            readfile($filePath);
            exit;
        } else {
            $this->send404("Asset not found: $uri");
        }
    }

    private function send404(string $message = '404 Not Found'): void
    {
        http_response_code(404);
        if (isset($this->notFoundHandler)) {
            call_user_func($this->notFoundHandler);
        } else {
            echo $message;
        }
    }
}
