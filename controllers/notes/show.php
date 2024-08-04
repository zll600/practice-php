<?php

$heading = "Note";
$currentUserId = 1;

$config = require "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();

authoirze($note['user_id'] === $currentUserId);

require "views/notes/show.view.php";