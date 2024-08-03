<?php

$books = [
    [
        "name" => "1st",
        "author" => "first",
    ],
    [
        "name" => "2nd",
        "author" => "second",
    ],
    [
        "name" => "3rd",
        "author" => "third",
    ]
];

$filteredBooks = array_filter($books, function($book) {
    return $book["author"] === 'third';
});

require "index.view.php";