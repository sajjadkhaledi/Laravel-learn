<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){

        //    Category::factory()->count(100)->create();
        // $categories = DB::select('select * from categories');
        // foreach($categories as $category){
        //     echo $category->name . '-';
        // }
        // $categories = DB::select('select * from categories where id = ?', [100]);
        // $categories = DB::select('select * from categories where id = :id', ['id' => 100]);
        // $categories = DB::insert('insert into categories (name) values (?)', ['sport']);
        // $categories = DB::update('update categories set name = ? where id = ?', ['sport2', 101]);
        // $categories = DB::delete('delete from categories where id = ?', [101]);


        // $categories = DB::table('categories')->get();


        // dd($categories);

        // $test = collect(['hassan', 'ali', 'zahra']);
        // dd($test);


        //  $categories = DB::table('categories')->get();
        //  $categories = DB::table('categories')->select('name')->get();
        //  $categories = DB::table('categories')->where('id', 100)->get();
        //  $categories = DB::table('categories')->where('id', 100)->first();
        //  $categories = DB::table('categories')->where('id', '>' , 50)->get();
        //  $categories = DB::table('categories')->where('name', 'like' , 'استاد')->get();
        //  $categories = DB::table('categories')->where('id', '>' , 50)->where('name', 'قباد نیشابوری')->get();
        //  $categories = DB::table('categories')->where([
        //      ['id', '>' , 50],
        //      ['name', 'قباد نیشابوری']
        //  ])->get();

                //  $categories = DB::table('categories')->where('id', '>' , 50)->orWhere('name', 'مهندس نیک میرسپاسی')->get();


                //  $categories = DB::table('categories')->whereBetween('id', [1, 5])->get();
                //  $categories = DB::table('categories')->whereIn('id', [1, 2, 3, 4])->get();
                //  $categories = DB::table('categories')->whereBetween('id', [1, 100])->get();
                //  $categories = DB::table('categories')->whereIn('id', [1, 100])->get();
                //  $categories = DB::table('categories')->whereNotBetween('id', [1, 100])->get();
                //  $categories = DB::table('categories')->whereNotIn('id', [1, 100])->get();
                //  $categories = DB::table('categories')->whereNull('id')->get();
                //  $categories = DB::table('categories')->whereNotNull('id')->get();
                //  $categories = DB::table('categories')->whereDate('created_at', '2020-02-15')->get();
                //  $users = DB::table('users')->whereColumn('name', '<>', 'email')->get();
                //  $users = DB::table('users')->whereColumn('name', '=', 'email')->get();

                // $users = DB::table('users')->where('id', 1)->orWhere('id', 2)->get();

                // $users = DB::table('users')->where('id', 1)->where('name', 'نغمه اصفهانی')->orWhere('email', 'rhijazi@example.net')
                // select * from users where id = 1 and name = نغمه اصفهانی Or email = rhijazi@example.net

                // $users = DB::table('users')->where('id', 1)->where(function ($query){
                //     $query->where('name', 'نغمه اصفهانی ')->orWhere('email', 'rhijazi@example.net');
                // })->get();

                // select * from users where id = 1 and (name = نغمه اصفهانی Or email = rhijazi@example.net)


        dd($users);


        return view('admin.index');

    }



    // public function show($id){

    //     return view('admin.index', compact('id'));

    // }


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

    public function show($id){
        // return view('admin.edit');
    }
}
