<?php


$config = require base_path("config.php");
$db = new \Core\Database($config['database']);
$notes = $db->query("SELECT * FROM notes where user_id = 1")->get();

view('/notes/index.view.php', ['heading' => 'Notes', 'notes' => $notes]);
