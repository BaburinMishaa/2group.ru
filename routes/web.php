<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Маршрут для /test http://127.0.0.1:8000/test
Route::get('/test', function () {
    return 'Это тестовое сообщение!';
});

Route::get('/dir/test', function () {
    return 'Это сообщение для маршрута /dir/test';
});


Route::get('/post/{id}', function () {
    return '';
});

/*
Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
});
*/
// http://127.0.0.1:8000/user/Smith/John
Route::get('/user/{name}', function ($name) {
    return "Привет, {$name}!";
});


Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
    return $catId . ' ' . $postId;
});

Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return "Привет, {$name} {$surname}!";
});


Route::get('/posts/page/{page}', function ($page) {
    return 'страница номер ' . $page;
});


Route::get('/posts/page/{page?}', function ($page) {
    return 'страница номер ' . $page;
});


Route::get('/posts/page/{page?}', function ($page = 1) {
    return 'страница номер ' . $page;
});

// Маршрут для города http://127.0.0.1:8000/city/Moscow
Route::get('/city/{city?}', function ($city = 'minsk') {
    return "Город: {$city}";
});

/*
Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
});


Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
})->where('id', '[0-9]+');
*/
// Маршрут для /user/id, где id это число http://127.0.0.1:8000/user/123
Route::get('/post/{id}', function ($id) {
    return "Профиль пользователя с ID: {$id}";
})->where('id', '[0-9]+');

// http://127.0.0.1:8000/user/abc

Route::get('/post/{id}', function ($id) {
    return "Профиль пользователя с ID: {$id}";
})->where('id', '[a-zA-Z]+');
Route::get('/post/{id}', function ($id) {
    return "Профиль  с ID: {$id}";
})->where('id', '[а-яА-ЯёЁ]+');
