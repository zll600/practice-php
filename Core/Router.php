<?php

namespace Core;

class Router {
    private $routes = [];

    private function add($uri, $method, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller
        ];
    }

    public function get($uri, $controller) {
        $this->add($uri, 'GET', $controller);
    }

    public function post($uri, $controller) {
        $this->add($uri, 'POST', $controller);
    }

    public function delete($uri, $controller) {
        $this->add($uri, 'DELETE', $controller);
    }

    public function put($uri, $controller) {
        $this->add($uri, 'PUT', $controller);
    }

    public function patch($uri, $controller) {
        $this->add($uri, 'PATCH', $controller);
    }

    public function route($uri, $method) {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && strtoupper($route['method']) == $method) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    public function abort($code = \Core\Response::NOT_FOUND) {
        http_response_code($code);

        require "views/{$code}.php";

        die();
    }
}

function abort($code = \Core\Response::NOT_FOUND) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

function routeUrls($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}