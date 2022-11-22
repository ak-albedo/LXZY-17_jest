<?php

$router->get('', 'UserController@index');
$router->get('members', 'UserController@members');
$router->post('store', 'UserController@store');
$router->post('validate-field', 'UserController@validateField');