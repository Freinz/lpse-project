<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


// Define a group of routes with 'auth' middleware applied
Route::middleware(['auth'])->group(function () {
    Route::get('/role_page', [UserController::class,'role_page']);
    
    Route::post('/cat_add', [UserController::class,'cat_add']);

Route::get('/cat_delete/{id}', [UserController::class,'cat_delete']);

Route::get('/cat_read/{id}', [UserController::class,'cat_read']);

Route::post('/cat_update/{id}', [UserController::class,'cat_update']);

Route::get('/input_user', [UserController::class,'input_user']);

Route::post('/store_user', [UserController::class,'store_user']);

Route::get('/show_user', [UserController::class,'show_user']);

Route::get('/user_delete/{id}', [UserController::class,'user_delete']);

Route::get('/user_read/{id}', [UserController::class,'user_read']);

Route::post('/user_edit/{id}', [UserController::class,'user_edit']);

    // Define a GET route for the root URL ('/')
    Route::get('/', function () {
        // Return a view named 'index' when accessing the root URL
        return view('index');
    });

    // Define a GET route with dynamic placeholders for route parameters
    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
});



