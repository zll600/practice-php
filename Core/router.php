<?php

$routes = require(base_path('routes.php'));

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($code = REsponse::NOT_FOUND) {
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

routeUrls($uri, $routes);