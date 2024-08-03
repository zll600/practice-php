<?php

require "functions.php";
// require "router.php";
require "database.php";


$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);