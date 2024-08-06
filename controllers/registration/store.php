<?php

use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!\Core\Validator::string($email)) {
   $errors['email'] = 'Please enter a valid email address';
}

if (!\Core\Validator::string($password, 1, 55)) {
    $errors['password'] = 'Please enter a valid password of at least 7 characters';
}

if (!empty($errorerrorss)) {
    return view('registration/create.view.php', ['errors' => $errors]);
}

$db = \Core\App::resolve(Database::class);

$user = $db->query("SELECT * FROM users WHERE email = :email", ['email' => $email])->find();
if ($user) {
    header("location: /");
    exit();
} else {
    $db->query("INSERT INTO `users`(email, password) VALUES (:email, :password)", [
        'email' => $email,
        'password' => $password,
    ]);

    $_SESSION['user'] = $email;
    header("location: /");
    exit();
}


