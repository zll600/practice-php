<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] == $url;
}

function authoirze($condition, $status = \Core\Response::FORBIDDEN) {
    if (!$condition) {
        abort($status);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
    require base_path('views/' . $path);
}

function login($user) {
    $_SESSION['user'] = [
        'email' => $user['email'],
    ];

    session_regenerate_id(true);
}

function logout() {
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}