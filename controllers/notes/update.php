<?php

$currentUserId = 1;

$errors = [];

$db = \Core\App::resolve(\Core\Database::class);
$id = $_POST['id'];

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();

$body = $_POST['body'];
if (!\Core\Validator::string($body, 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (count($errors)) {
   return view(
       'note/edit.view.php',
       [
           'heading' => 'Edit note',
           'note' => $note,
           'errors' => $errors
       ]
   );
}

authoirze($note['user_id'] === $currentUserId);

$note = $db->query("UPDATE notes SET body = :body WHERE id = :id", ['body' =>  $body,'id' => $id]);




view('notes/show.view.php', ['heading' => 'Note' , 'note' => $note]);
