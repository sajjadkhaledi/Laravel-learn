<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function(){
//     echo 'hi';
// });
// $route = new Route();
// $route->get();

// Route::get('/category', function(){
//     echo 'this is category page';
// });
// Route::post('/category/store', function(){
//    //
// });

// Route::put('/category/update', function(){
//     echo 'this is category page';
// });

// Route::patch('/category/update', function(){
//     echo 'this is category page';
// });

// Route::delete('/category/delete', function(){
//     echo 'this is category page';
// });


// Route::match(['get', 'post'], '/category', function(){
//     echo 'this is category page';
// });

// Route::any('/category', function(){
//     echo 'this is category page';
// });


// Route::put('/category/update/{id}', function(){
//     echo 'this is category page';
// });

// Route::get('/category/edit/{id}', function($id){
//     echo 'this is edit category page  : ' . $id;
// });


// Route::get('/category/edit/{id}/{name?}', function($id, $name = null){
//     echo 'this is edit category page  : ' . $id . $name;
// });


// Route::get('/category/edit/{id}', function(){
//     echo 'this is category page';
// })->where('id', '[0-9]+');
// Route::get('/category/edit/{name}', function(){
//     echo 'this is category page';
// })->where('id', '[a-zA-Z0-9]+');

// Route::get('/category/edit/{id}/{name}', function(){
//     echo 'this is category page';
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// Route::get('/', function(){
//    return view('welcome');
// });


// Route::get('/category', function(){
//     echo 'this is category page';
// });


// Route::get('/', [CategoryController::class, 'index']);
// Route::get('/category', [CategoryController::class, 'index'])->name('category');
// Route::get('/category/create', [CategoryController::class, 'index'])->name('category.create');
// Route::get('/category/edit/{id}', [CategoryController::class, 'index'])->name('category.edit');
// Route::get('admin/category/update/{id}', [CategoryController::class, 'index'])->name('admin.category.update');



// Route::get('/', function(){
//    return view('welcome');
// });
// Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// Route::middleware('auth')->group(function(){

//     Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// });

// Route::prefix('admin')->group(function(){

// Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// });

// Route::name('admin.')->group(function(){

// Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// });

// Route::group(['prefix' => 'admin'], function(){

// Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// });
// Route::domain('test.myapp.com')->group(function(){

// Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// });


// Route::namespace('Dashboard')->group(function(){

// Route::get('/users', [CategoryController::class, 'index'])->name('users');
// Route::get('/users/create', [CategoryController::class, 'index'])->name('users.create');
// Route::get('/users/edit/{id}', [CategoryController::class, 'index'])->name('users.edit');
// Route::get('/users/edit/{id}/{name}', [CategoryController::class, 'index'])->name('users.edit');

// })

// Route::fallback(function() {
//     echo '404';
// });

// Route::get('/', function(){
//    return view('welcome');
//    return view('admin.index');
// });

// Route::get('/', [CategoryController::class, 'index']);


// Route::get('/', function(){
//    return view('admin.index');
//    return view('admin.index')->with('var', 'hassan');
//    return view('admin.index', ['var' => 'hassan']);
// $var = 'hassan';
//    return view('admin.index', compact('var'));

// });

// Route::view('/', 'admin.index', ['var' => 'hassan']);



Route::get('/show/{id}', [CategoryController::class, 'show']);
