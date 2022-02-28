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
        // $validated = $request->validate([
        //     'name' => 'required|date',
        //     'description' => 'required',
        //     'hassan' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'user_id' => 'exists:users,id',
        //     'user_id' => 'exists:users,id',
        //     'user_id' => 'exists:users,id',
        // ]);
        // if($errors->has('email')){

        // }
        // foreach($errors->get('email') as $message){

        // }
        foreach($errors->get('favcolors.*') as $message){

        }
        // dd($request->validated());
        // dd($request->safe()->only(['name', 'email']));
        // dd($request->safe()->except(['name', 'email']));
        Category::create(['name' => $request->name]);
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
