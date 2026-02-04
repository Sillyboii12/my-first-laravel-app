<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $users = [
        ['name' => "Antra" , "age" => 27],
        ['name' => "Valdis" , "age" => 13],
        ['name' => "Elon" , "age" => 3],
    ];

    class car {
        public $name;
        public $year;

        function __construct($name, $year) {
            $this->name = $name;
            $this->year = $year;
        }
    }


    $cars = [
        $car1 = new car("Toyota", 2008),
        $car2 = new car("BMW", 2023),
        $car3 = new car("Volkswagen", 2015),
        $car4 = new car("Skoda", 2002),
        $car5 = new car("Opel", 2011),
    ];
    return view('about', ['users' => $users, 'cars' => $cars]);
});

Route::get('/greetings', [UserController::class, 'greetUser']);