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



// Route::get('/show/{id}', [CategoryController::class, 'show']);


// Route::get('/category', [CategoryController::class, 'index'])->name('category');
// Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
// Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
// Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
// Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
// Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

// Route::resource('category', CategoryController::class);

// Route::resource([
//     'category' => CategoryController::class,
//     'user' => UserController::class,
//     'post' => PostController::class
// ]);

// Route::apiResource('category', CategoryController::class);



// Route::get('photo', PhotoService::class);


// Route::get('redirect', function(){
//     return redirect()->to('category/create');
// });
// Route::get('redirect', function(){
//     return redirect('category/create');
// });

// Route::get('redirect', function(){
//     return Redirect::to('category/create');
// });

// Route::redirect('hassan', 'category', 301);


