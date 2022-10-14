<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Hello there! ' . ' General Kenobi, you are a bold one!';
});

Route::get('/name', function () {
    return 'დავიD ბედიაშვილი';
});

Route::get('/age', function () {
    return '19 წლის';
});

Route::get('/hobby', function () {
    return 'ჭოკით ხტომა';
});

Route::get('/favColor', function () {
    return 'სველი ასფალტი';
});

Route::get('/favMovie', function () {
    return 'Dark Knight';
});

Route::match(['get', 'post'], '/postpart', function () {
    $arr = ["message" => "წარმატებით განახლდა"];
    return json_encode($arr);
});

Route::match(['get', 'put'], '/putpart', function () {
    $arr = ["message" => "წარმატებით განახლდა"];
    return json_encode($arr);
});


Route::match(['get', 'delete'], '/deletepart', function () {
    $arr = ["message" => "წარმატებით განახლდა"];
    return json_encode($arr);
});

