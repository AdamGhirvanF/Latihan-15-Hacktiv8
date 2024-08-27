<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/todo', 'TodoController@index');
$router->get('/todo/{id}', 'TodoController@show');
$router->post('/todo', 'TodoController@store');
$router->post('/todo/{id}', 'TodoController@update');
$router->delete('/todo/{id}', 'TodoController@destroy');
