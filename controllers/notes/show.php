<?php

$currentUserId = 1;

$config = require base_path("config.php");
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();

authoirze($note['user_id'] === $currentUserId);

view('notes/show.view.php', ['heading' => 'Note' , 'note' => $note]);