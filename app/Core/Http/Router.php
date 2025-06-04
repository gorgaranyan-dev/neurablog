<?php

namespace App\Core\Http;

use App\Interfaces\ResponseInterface;

class Router
{
    /**
     * @var array
     */
    private $routes = [
        'GET'    => [],
        'POST'   => [],
        'PUT'    => [],
        'DELETE' => [],
    ];

    /**
     * @var callable|null
     */
    private $notFoundHandler = null;

    /**
     * @param  string  $uri
     * @param  callable|array  $action
     *
     * @return Route
     */
    public function get(string $uri, $action): Route
    {
        return $this->addRoute('GET', $uri, $action);
    }

    /**
     * @param  string  $method
     * @param  string  $uri
     * @param  callable|array  $action
     *
     * @return Route
     */
    private function addRoute(string $method, string $uri, $action): Route
    {
        $uri                         = $this->normalizeUri($uri);
        $route                       = new Route($uri, $method, $action);
        $this->routes[$method][$uri] = $route;

        return $route;
    }

    private function normalizeUri(string $uri): string
    {
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';

        return rtrim($path, '/') ?: '/';
    }

    public function post(string $uri, $action): Route
    {
        return $this->addRoute('POST', $uri, $action);
    }

    public function put(string $uri, $action): Route
    {
        return $this->addRoute('PUT', $uri, $action);
    }

    public function delete(string $uri, $action): Route
    {
        return $this->addRoute('DELETE', $uri, $action);
    }

    public function fallback(callable $handler): void
    {
        $this->notFoundHandler = $handler;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri    = $this->normalizeUri($_SERVER['REQUEST_URI'] ?? '/');

        if (strpos($uri, '/public/') === 0) {
            $this->serveStaticFile($uri);

            return;
        }

        list($route, $params) = $this->matchRoute($method, $uri);

        if ($route instanceof Route) {
            $response = $route->callback($params);
        } else {
            $this->send404();
        }

        if ( ! empty($response) && $response instanceof ResponseInterface) {
            $response->send();
        }
    }

    private function serveStaticFile(string $uri): void
    {
        $filePath = $_SERVER['DOCUMENT_ROOT'].$uri;

        if ( ! file_exists($filePath)) {
            $this->send404("Asset not found: $uri");

            return;
        }

        $mimeTypes = [
            'css'   => 'text/css',
            'js'    => 'application/javascript',
            'jpg'   => 'image/jpeg',
            'jpeg'  => 'image/jpeg',
            'png'   => 'image/png',
            'gif'   => 'image/gif',
            'svg'   => 'image/svg+xml',
            'woff'  => 'font/woff',
            'woff2' => 'font/woff2',
        ];

        $ext  = pathinfo($filePath, PATHINFO_EXTENSION);
        $type = $mimeTypes[$ext] ?? 'application/octet-stream';

        header('Content-Type: '.$type);
        readfile($filePath);
        exit;
    }

    private function send404(string $message = '404 Not Found'): void
    {
        http_response_code(404);

        if ($this->notFoundHandler) {
            call_user_func($this->notFoundHandler);
        } else {
            echo $message;
        }
    }

    /**
     * @param  string  $method
     * @param  string  $uri
     *
     * @return array
     */
    private function matchRoute(string $method, string $uri): array
    {
        if (isset($this->routes[$method][$uri])) {
            return [$this->routes[$method][$uri], []];
        }

        foreach ($this->routes[$method] as $key => $route) {
            $pattern = preg_replace('#:([\w]+)#', '([^/]+)', $key);
            $pattern = '#^'.rtrim($pattern, '/').'$#';

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // remove full match

                return [$route, $matches];
            }
        }

        return [null, []];
    }
}
