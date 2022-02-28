<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    // $user = User::find(1);
    // Auth::login($user);
    // Auth::loginUsingId(2);
    // return view('welcome');
});

Route::get('/dashboard', function () {

// $user = Auth::user();
// $user = Auth::id();
// dd($user);
// $request->user();
// dd(Auth::check());
    // return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// })->middleware(['password.confirm'])->name('dashboard');


// require __DIR__.'/auth.php';

// Route::get('/test-login', [LoginController::class, 'create']);
// Route::post('/test-login/store', [LoginController::class, 'store'])->name('testLogin.store');
// Route::get('/panel-admin', function () {
//     dd('admin');
// })->name('panelAdmin');


// auth()


