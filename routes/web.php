<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello-how-are-you', function () {
    return 'Hi there! How\'s it going?';
});
Route::get('/hello-how-are-you/{zahid}', function ($name) {
    return "Hi there! How's it going, $name?";
});
Route::get('/name/{zahid}/{rizky}', function ($firstname, $lastname) {
    return "I am $firstname $lastname";
});
Route::get('/home', [BiodataController::class, 'home']);
Route::get('/about', [BiodataController::class, 'about']);