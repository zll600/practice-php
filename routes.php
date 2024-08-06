<?php

$router->get('/', '/controllers/index.php');
$router->get('/about', '/controllers/about.php');
$router->get('/contact', '/controllers/contact.php');

$router->get('/notes', '/controllers/notes/index.php');
$router->get('/note', '/controllers/notes/show.php');
$router->get('/notes/create', '/controllers/notes/create.php');
$router->get('/note/edit', '/controllers/notes/edit.php');

$router->patch('/note', '/controllers/notes/update.php');

$router->post('/notes', '/controllers/notes/store.php');
$router->delete('/note', '/controllers/notes/destroy.php');

$router->get('/register', '/controllers/registration/create.php');
$router->post('/register', '/controllers/registration/store.php');

$router->get('/login', '/controllers/registration/create.php')->only('guest');
$router->post('/sessions', '/controllers/registration/store.php')->only('guest');
$router->delete('/sessions', '/controllers/registration/destroy.php')->only('auth');
