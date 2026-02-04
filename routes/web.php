<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $users = [
        ['name' => "Antra" , "age" => 27],
        ['name' => "Valdis" , "age" => 13],
        ['name' => "Elon" , "age" => 3],
    ];
    return view('about', ['users' => $users]);
});
