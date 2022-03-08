<?php

use App\Models\Post;
use App\Models\User;
use App\Jobs\ProcessPost;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {

    // Log::emergency('emergency');
    // Log::alert('emergency');
    // Log::critical('emergency');
    // Log::error('emergency');
    // Log::warning('emergency');
    // Log::notice('emergency');
    // Log::info('emergency');
    // Log::debug('message');
    // dd('hi');
    // ProcessPost::dispatch()->delay(now()->addMinutes(1));
    // return view('welcome');
});

Route::get('/dashboard', function () {
})->middleware(['auth'])->name('dashboard');


Route::resource('category', CategoryController::class);


require __DIR__.'/auth.php';

