<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){

        // $users = DB::table('posts')->join('users', 'users.id', 'posts.user_id')->get();
        // $users = DB::table('posts')->leftJoin('users', 'users.id', 'posts.user_id')->get();



        // $users = DB::table('users')->orderBy('id', 'DESC')->get();
        // $users = DB::table('users')->orderBy('id', 'ASC')->get();
        // $users = DB::table('users')->latest()->first();
        // $users = DB::table('users')->inRandomOrder()->first();
        // $users = DB::table('users')->take(10)->get();
        // $users = DB::table('users')->skip(5)->take(10)->get();
        // $users = DB::table('users')->offset(5)->limit(10)->get();

        // $users = DB::table('posts')->groupBy('user_id')->select('user_id', DB::raw('count(*) as total'))->get();


        // $result = true;
        // $users = DB::table('users')->when($result, function($query){
        //     return $query->where('id', 201);
        // })->get();

        // $users = DB::table('users')->first();
        // $users = DB::table('users')->get();


        // $users = DB::table('users')->count();
        // $users = DB::table('users')->where('id', '>', 240)->count();

        // $users = DB::table('users')->max('id');
        // $users = DB::table('users')->avg('id');


        // DB::table('posts')->insert([
        //     ['title' => 'test', 'user_id' => 201],
        //     ['title' => 'test2', 'user_id' => 210],
        // ]);

        // $id = DB::table('posts')->insertGetId([
        //     'title' => 'test3', 'user_id' => 201,
        // ]);

        // $users = DB::table('posts')->where('id', 53)->update([
        //     'title' => 'test3 update'
        // ]);

    //     $users = DB::table('posts')->updateOrInsert(
    //         // ['title' => 'test3 update'],
    //         ['title' => 'hassan'],
    //         ['user_id' => 250]
    // );


        // $posts = DB::table('posts')->where('id', 54)->increment('user_id');
        // $posts = DB::table('posts')->where('id', 54)->decrement('user_id');
        // $posts = DB::table('posts')->where('id', 54)->decrement('user_id', 5);
        // $posts = DB::table('posts')->where('id', 53)->delete();

        // DB::table('posts')->where('id', 50)->update(['title' => 'test']);
        // DB::table('posdsasdasadsadasts')->where('id', 51)->update(['title' => 'test2']);


        // DB::transaction(function () {
        //     DB::table('posts')->where('id', 50)->update(['title' => 'asghar']);
        //     DB::table('posdsasdasadsadasts')->where('id', 51)->update(['title' => 'asghar2']);
        // });


        // try{
        //     DB::beginTransaction();
        //     DB::table('posts')->where('id', 50)->update(['title' => 'asghar']);
        //     DB::table('posdsasdasadsadasts')->where('id', 51)->update(['title' => 'asghar2']);
        //     DB::commit();
        // }
        // catch(\Exception $e){
        //     echo $e;
        //     DB::rollback();
        // }


        // $categories = Category::all();

        // foreach($categories as $category){
        //     echo $category->name . ' - ';
        // }

        // $categories = Category::where('id', 50)->first();
        // $categories = Category::where('id', 50)->get();

        // dd($categories[0]->name);

        // $categories = Category::orderBy('id', 'desc')->get();
        // $categories = Category::orderBy('id', 'desc')->take(10)->get();

        // $categories = Category::find(10);
        // $categories = Category::find([10, 12, 14]);
        // $categories = Category::findOrFail(10000000);

        // try{
        //     $categories = Category::findOrFail(10000000);
        // }
        // catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        //     return response()->json('رکورد مورد نظر شما یافت نشد',404, [], JSON_UNESCAPED_UNICODE);
        // }

        // Category::chunk(40, function($categories){
        //     foreach($categories as $category){
        //         dump($category);
        //     }
        // });

        // foreach(Category::where('id', '>', 1)->cursor() as $category){
        //                     dump($category);
        // }

        // dd($categories);


        // $category = new Category;
        // $category->name = 'sport';
        // $category->save();

        $category = new Category([
            // $request->all()
        ]);
        $category->save();










        // dd($posts);


        return view('admin.index');

    }



    public function show(Category $category)
    {
        // $post = Post::find($id);
        dd($category);

        // return view('admin.index', compact('id'));

    }


    public function create(){

        return view('admin.create');
    }

    public function store(Request $request){
        // dd($request->all());
        // return redirect()->away('https://toplearn.com');
    }

    public function edit($id){
        return view('admin.edit');
    }
}
