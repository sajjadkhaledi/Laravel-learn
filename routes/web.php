<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Address;
use App\Models\Category;
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

Route::get('/', function () {

//    $user = User::find(1);
//     dd($user->address()->get());
//     dd($user->address);
    //    $address = Address::find(1);
    //    dd($address->user->name);


    //    $category = Category::find(1);
    // dd($category->posts);

    $post = Post::find(1);
    dd($post->category);

});
