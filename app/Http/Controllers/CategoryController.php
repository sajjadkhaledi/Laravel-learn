<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // echo 'hi';
        // dd('hi');
        // ddd('hi');
        // return view('admin.index');
        // abort(404, 'صفحه پیدا نشد');
        // abort(500);
        // abort(403);
        // return response('salam', 404)->header('Content-Type', 'text/plain');
        // return response('salam', 404)->header('Content-Type', 'text/plain')->cookie('name', 'hassan', 10);
        // return response()->json([
        //     'age' => 20,
        //     'name' => 'hassan'
        // ]);
        // return [
        //     'age' => 20,
        //     'name' => 'hassan'
        // ];
        // return response()->download('1.png', 'hassan.png');
        // return response()->download('1.png', 'hassan.png')->deleteFileAfterSend();
        // return response()->file('2.pdf');

            $name = 'ali';
        return view('admin.index', compact('name'));

    }



    // public function show($id){

    //     return view('admin.index', compact('id'));

    // }


    public function create(){
        return view('admin.create');
        // return response()->download('1.png', 'hassan.png');
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
