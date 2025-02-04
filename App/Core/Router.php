<?php
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
            if ($route['method'] === $requestMethod && $this->matchPath(
                $route['path'],
                $requestUri
            )) {
                return call_user_func($route['handler']);
            }
        }
        throw new Exception('Route not found');
    }


    private function matchPath($routePath, $requestUri)
    {
        $routeRegex = preg_replace('/\{(\w+)\}/', '(?P<$1>[^/]+)', $routePath);
        $routeRegex = "#^" . $routeRegex . "$#";
        return preg_match($routeRegex, $requestUri, $matches);
    }
}
