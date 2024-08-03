<?php

$heading = "Note";

$config = require "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->fetch(PDO::FETCH_ASSOC);

require "views/note.view.php";