<?php

use App\Car;
use App\Models\Post;
use App\Models\User;
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

// Route::get('/', function(){
    // Post::factory()->count(50)->create();
// });



Route::resource('category', CategoryController::class);

// Route::get('post/show/{id}', [CategoryController::class, 'show']);
// Route::get('post/show/{post}', [CategoryController::class, 'show']);
// Route::get('user/show/{user:email}', [CategoryController::class, 'show']);


// user_id
// post_id
// comment
