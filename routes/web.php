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
    return view('index', ['page_title' => 'Главная']);
});

$router->get('/news', function () {
    return view('news', ['page_title' => 'Новости']);
});

$router->get('/about', function() {
    return view('about', ['page_title' => 'О компании']);
});

$router->get('/pricing', function() {
    return view('pricing', ['page_title' => 'Тарифы']);
});