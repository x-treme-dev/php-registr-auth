<?php

use App\Services\Router;

Router::page('/register', 'register');
Router::page('/login', 'login');
Router::page('/', 'home');

Router::enable();


