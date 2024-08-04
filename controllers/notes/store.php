<?php

$db = \Core\App::resolve(\Core\Database::class);

$errors = [];

if (!\Core\Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (!empty($errors)) {
    view('notes/create.view.php', [
        'heading' => 'Create Note',
        'errors' => $errors]);
}

if (empty($errors)) {
    $db->query('insert notes (body, user_id) values (:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);

    header('location: /notes');
    die();
}
