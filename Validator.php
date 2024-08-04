<?php

class Validator {
    public static function string($value, $min = 1, $max = 255) {
        $value = trim($value);
        $value_length = strlen($value);
        return $value_length >= $min && $value_length <= $max;
    }
}