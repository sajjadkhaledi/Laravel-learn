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
    }



    public function show($id){

        return view('admin.index', compact('id'));

    }
}
