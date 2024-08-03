<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] == $url;
}

function authoirze($condition, $status = Response::FORBIDDEN) {
    if (!$condition) {
        abort($status);
    }
}