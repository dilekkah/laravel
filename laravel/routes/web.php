<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello, Laravel";
});


Route::get('/hello/{name}/info', function ($name) {
    return 'Hello, ' . $name . ' !!!';
});

Route::get('/tmp', [TempController::class, 'tmpFunction']);

Route::resource('customers', CustomerController::class);
Route::resource('activites', ActivityController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('foods', FoodController::class);
Route::resource('meals', MealController::class);
