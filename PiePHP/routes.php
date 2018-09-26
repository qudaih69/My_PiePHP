<?php

namespace Core;

Router::connect('/', ['controller' => 'App', 'action' => 'index']);
Router::connect('/user', ['controller' => 'User', 'action' => 'index']);
Router::connect('/user/register', ['controller' => 'User', 'action' => 'register']);
Router::connect('/user/login', ['controller' => 'User', 'action' => 'login']);
Router::connect('/user/add', ['controller' => 'User', 'action' => 'add']);
Router::connect('/article', ['controller' => 'Article', 'action' => 'index']);
Router::connect('/comment', ['controller' => 'Comment', 'action' => 'index']);
Router::connect('/tag', ['controller' => 'Tag', 'action' => 'index']);