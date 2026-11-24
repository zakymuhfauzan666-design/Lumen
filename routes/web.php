<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello-lumen', function () {
    return "<h1>Lumen</h1><p>Hi good developer, thank for using Lumen</p>";
});

$router->get('/hello-lumen/{name}', function ($name) {
    return "<h1>Lumen</h1><p>Hi <b>" . $name . "</b>, thank for using Lumen</p>";
});

$router->get('/scores', ['middleware' => 'login', function () {
    return "<h1>Selamat</h1><p>Nilai anda 100</p>";
}]);

$router->get('/', 'UsersController@status');
$router->get('/users', 'UsersController@index');
$router->get('/users/{userId}', 'UsersController@show');
$router->get('/posts', 'PostsController@index');
$router->post('/posts', 'PostsController@store');
$router->get('post/{id}', 'PostsController@show');
$router->put('post/{id}', 'PostsController@update');
$router->delete('post/{id}', 'PostsController@destroy');

$router->get('/mahasiswa', 'MahasiswaController@index');
$router->post('/mahasiswa', 'MahasiswaController@store');
$router->get('/mhs/{id}', 'MahasiswaController@show');
$router->put('/mhs/{id}', 'MahasiswaController@update');
$router->delete('/mhs/{id}', 'MahasiswaController@destroy');