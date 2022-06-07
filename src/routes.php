<?php
// require_once(implode(DIRECTORY_SEPARATOR,['Core','autoload.php']));
// use Core;
Core\Router::connect('/', ['controller' => 'app', 'action' => 'indexAction']); 
Core\Router::connect('/search', ['controller' => 'movie','action' => 'search']);
// Core\Router::connect('/show', ['controller' => 'user', 'action' => 'ShowAction']) ; 
Core\Router::connect('/login', ['controller' => 'user', 'action' => 'loginAction']); 
Core\Router::connect('/loginPost', ['controller' => 'user', 'action' => 'login']); 
Core\Router::connect('/profil', ['controller' => 'user', 'action' => 'profil']); 

Core\Router::connect('/save', ['controller' => 'user', 'action' => 'update']); 
Core\Router::connect('/logout', ['controller' => 'user', 'action' => 'logout']); 
Core\Router::connect('/delete', ['controller' => 'user', 'action' => 'delete']); 


Core\Router::connect('/register', ['controller'=> 'user', 'action' => 'addAction']);
Core\Router::connect('/registerAction', ['controller' => 'user', 'action' => 'registerAction']);
Core\Router::connect('/user/{id}', ['controller'=>'user','action'=>'show']);
Core\Router::connect('/movie/{id}', ['controller'=>'user','action'=>'show']);

// Core\Router::connect('/request', ['controller' => 'user', 'action' => 'registerAction']);

