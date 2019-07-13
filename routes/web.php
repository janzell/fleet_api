<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return response()->json(['version' => $router->app->version()]);
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->group(['prefix' => 'auth'], function () use ($router) {
        $router->post('/register', "AuthController@register");
        $router->post('/login', "AuthController@login");
        $router->post('/logout', "AuthController@logout");
        $router->get('/me', "AuthController@getUser");
    });
});

