<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\core\Request;
use App\core\Router;

// Routs
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());