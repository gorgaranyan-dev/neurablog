<?php

namespace App\Core\Http;

use App\Core\Http\Request\Request;

class Route
{
    private $uri;
    private $method;
    private $action;
    private array $middlewares = [];

    public function __construct($uri, $method, $action)
    {
        $this->uri    = $uri;
        $this->method = $method;
        $this->action = $action;
    }

    public function middleware(array $middlewares): self
    {
        foreach ($middlewares as $middlewareClass) {
            if (class_exists($middlewareClass)) {
                $middleware = new $middlewareClass();
                if ($middleware instanceof Middleware) {
                    $this->middlewares[] = $middleware;
                }
            }
        }

        return $this;
    }

    public function callback($params)
    {
        $request = new Request();

        $controllerCallback = function () use ($request, $params) {
            if (is_array($this->action)) {
                [$controller, $methodName] = $this->action;
                if (class_exists($controller) && method_exists($controller, $methodName)) {
                    $instance = new $controller();

                    return call_user_func_array([$instance, $methodName], [$request, ...$params]);
                }
            } elseif (is_callable($this->action)) {
                return call_user_func_array($this->action, [$request, ...$params]);
            }

            return null;
        };

        $middlewareChain = array_reverse($this->middlewares ?? []);
        $next            = $controllerCallback;

        foreach ($middlewareChain as $middleware) {
            $next = function () use ($middleware, $request, $next) {
                return $middleware->handle($request, $next);
            };
        }

        return $next();
    }

}
