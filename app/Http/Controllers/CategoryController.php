<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

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
