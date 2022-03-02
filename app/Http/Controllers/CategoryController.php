<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\MessageBag;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $error = new MessageBag();
        $error->add('error', 'خطا رخ داده است');
        return view('category.create')->withErrors($error);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // dd($request->path());
        // dd($request->is('category'));
        // dd($request->is('category/*'));
        // dd($request->url());
        // dd($request->fullUrl());
        // dd($request->method());
        // dd($request->isMethod('get'));
        // dd($request->all());
        // dd($request->input());
        // dd($request->input('name'));
        // dd($request->name);
        // dd($request->only('name'));
        // dd($request->except('name'));
        // dd($request->except('_token'));
        // dd($request->has('title'));
        // dd($request->has('image'));
        // dd($request->filled('name'));
        // dd($request->all());
        // dd($request->file('image'));
        // dd($request->hasFile('image'));
        // dd($request->file('image')->getMimeType());
        // dd($request->file('image')->isValid());
        // $fileName = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('uploads'), $fileName);
        // dd($request->input('employees.1.lastName'));
        // $validated = $request->validate([
        //     'name' => 'required|date',
        //     'description' => 'required',
        //     'hassan' => 'required',
            // 'image' => 'required|image',
        //     'user_id' => 'exists:users,id',
        //     'user_id' => 'exists:users,id',
        //     'user_id' => 'exists:users,id',
        // ]);
        // if($errors->has('email')){

        // }
        // foreach($errors->get('email') as $message){

        // }
        // foreach($errors->get('favcolors.*') as $message){

        // }
        // dd($request->validated());
        // dd($request->safe()->only(['name', 'email']));
        // dd($request->safe()->except(['name', 'email']));
        // Category::create(['name' => $request->name]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
