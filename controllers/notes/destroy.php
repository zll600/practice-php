<?php

$currentUserId = 1;

$db = \Core\App::resolve(\Core\Database::class);

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();

authoirze($note['user_id'] === $currentUserId);

$note = $db->query("DELETE FROM notes WHERE id = :id", ['id' => $id]);

header('location: /notes');
exit();
