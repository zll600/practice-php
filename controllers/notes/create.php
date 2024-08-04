<?php

require "Validator.php";

$heading = 'Create Note';

$config = require "config.php";
$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1000 characters is required';
    }

    if (empty($errors)) {
        $db->query('insert notes (body, user_id) values (:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);
    }
}

require "views/notes/create.view.php";