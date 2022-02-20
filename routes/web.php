<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use App\Models\Video;
use App\Models\Address;
use App\Models\Category;
use App\Models\Mechanic;
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


        // $post = Post::find(1);

        // dd($post->image);


//    $user = User::find(1);

//         dd($user->image);

    // $image = Image::find(2);

    // dd($image->imageable);


        //     $post = Post::find(1);

        // dd($post->images);


//    $user = User::find(1);

//         dd($user->images);

    // $image = Image::find(2);

    // dd($image->imageable);

    // $post = Post::find(1);

    // dd($post->tags);


//   $video = Video::find(1);

//     dd($video->tags);


    $category = Category::find(1);

    // dd($category->posts);
    dd($category->latestPost);

});
