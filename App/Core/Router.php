<?php

namespace App\Core;

class Router
{
    private $routes = [];
    public function addRoute($method, $path, $handler)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler
        ];
    }

    public function dispatch($requestMethod, $requestUri)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $this->matchPath($route['path'], $requestUri)) {
                $handler = $route['handler'];

                if (is_array($handler)) {
                    $controller = new $handler[0]();
                    return call_user_func([$controller, $handler[1]]);
                }
                return call_user_func($handler);
            }
        }

        throw new \Exception('Route not found');
    }

    private function matchPath($routePath, $requestUri)
    {
        $routeRegex = preg_replace('/\{(\w+)\}/', '(?P<$1>[^/]+)', $routePath);
        $routeRegex = "#^" . $routeRegex . "$#";
        return preg_match($routeRegex, $requestUri, $matches);
    }
}
