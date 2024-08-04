<?php

namespace Core;
class App {
    private static $container;

    public static function setContainer($container) {
        self::$container = $container;
    }

    public static function container() {
        return self::$container;
    }

    public static function bind($key, $binding) {
        self::$container->bind($key, $binding);
    }

    public static function resolve($key) {
        return self::$container->resolve($key);
    }
}