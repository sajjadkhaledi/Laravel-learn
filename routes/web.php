<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoService;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Redirect;

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

// Route::get('/', function(){
//     echo 'hi';
// });

// Route::resource('category', CategoryController::class);


// Route::get('test', function(){
    // return redirect();
    // return redirect()->back();
    // return redirect()->route('category.index', ['id' => 2]);
    // return redirect()->action([CategoryController::class,'index']);
        // return redirect()->route('category.index')->with('status', 'enable');
// });




Route::resource('category', CategoryController::class);
