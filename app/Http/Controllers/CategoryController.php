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



        // $category = new Category;
        // $category->name = 'sport';
        // $category->save();

        // $category = new Category([
        //     'name' => 'news'
        // ]);
        // $category->save();


        // $category = Category::make([
        //     'name' => 'news'
        // ]);
        // $category->save();


        // $category = Category::create([
        //     'name' => 'news'
        // ]);

        // $category = Category::find(106);
        // $category->name = 'updated news';
        // $category->save();

        // Category::where('id', 106)->update([
        //     'name' => 'news'
        // ]);

        // $category = Category::find(106);
        // $category->update([
        //  'name' => 'updated news'
        // ]);

        // $categories = Category::where('id', '>', 50)->count();
        // $categories = Category::where('id', '>', 50)->avg('id');
        // dd($categories);

    //     $category = Category::firstOrCreate(
    //         ['name' => 'خانم فاsadsadsadssadsخته فارسی']
    //     );
    // dd($category);

        // $category = Category::find(106);
        // $category->delete();

        // Category::destroy(105);
        // Category::destroy([104, 107, 100]);

        // Category::where('id', 103)->delete();

        // $categories = Category::all();
        // $categories = Category::withTrashed()->get();
        // $categories = Category::onlyTrashed()->get();
        // $categories = Category::onlyTrashed()->restore();
        // $categories = Category::onlyTrashed()->forceDelete();
        // dd($categories);













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
