<?php

namespace Core;

class Container {
    private array $bindings = [];

    public function bind($key, $binding) {
        $this->bindings[$key] = $binding;
    }

    public function resolve($key) {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("No binding for key {$key}");
        }
        $binding = $this->bindings[$key];
        return call_user_func($binding);
    }
}