<?php

use App\core\App;
use App\core\database\Connection;
use App\core\database\QueryBuilder;
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;



$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

App::bind('config', ['database' => [
	'name' => $_ENV['DB_NAME'],
    'connection' => $_ENV['DB_CONNECTION'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
]]);


App::bind(
    'database',
    new QueryBuilder(
        Connection::make(App::get('config')['database'])
    )
);

function view($name, $data = [])
{
    extract($data);
    require "app/views/templates/header.php";
    require "app/views/{$name}.php";
    return require "app/views/templates/footer.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
