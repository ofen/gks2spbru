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

$router->get('/', function () {
    return view('index', ['title' => 'Главная']);
});

$router->get('/news', function () {
    return view('news', ['title' => 'Новости']);
});

$router->get('/about', function() {
    return view('about', ['title' => 'О компании']);
});

$router->get('/pricing', function() {
    return view('pricing', ['title' => 'Тарифы']);
});