<?php

use App\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoService;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function(Car $car){
//     return view('welcome', compact('car'));
// });

Route::get('/', function(){
    return view('welcome');
});



// Route::resource('category', CategoryController::class);
