<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
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

    // user->car->info

    // mechanic->car->owner

    // $mechanic = Mechanic::find(1);
    // dd($mechanic->carOwner);


    // countries->users->posts


    // $mechanic = Mechanic::find(1);
    // dd($mechanic->carOwners);


//    $post = Post::find(1);
//     dd($post->tags);
//   $tag = Tag::find(1);
//     foreach ($tag->posts as $post){
//         echo $post->pivot->created_at;
//     }

    $post = Post::find(1);

    // $post->tags()->attach(2);
    // $post->tags()->attach(2);
    // $post->tags()->attach(2);
    // $post->tags()->attach(2);
    // $post->tags()->attach(2);
    // $post->tags()->detach(2);


    // $post->tags()->sync(2);
    $post->tags()->sync([1, 2]);


});
