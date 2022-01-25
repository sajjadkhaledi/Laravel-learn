<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // $products = Product::where('status', 1)->get();
        // $products = Product::active()->get();
        // dd($products);
        // $user = User::find(1);
        // dd($user->first_name . ' ' . $user->last_name);
        // dd($user->fullName);
        // dd($user->userName);

        // $user = new User;
        // $user->name = 'HASSAN';
        // $user->email = 'hassan@yahoo.com';
        // $user->password = '21312312';
        // $user->save();

        // $product = Product::find(3);
        // dd($product);

                $products = Product::all();
                // dd($products);
                // dd($products->toArray());
                // dd($products->toJSON());
                return $products;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   $product = new Product;

    //     $product->name = $request->name;
    //     $product->color = $request->color;
    //     $product->price = $request->price;
    //     $product->number = $request->number;
    //     $product->body = $request->body;

    //     $product->save();
    // dd($request->all());

    // $product = Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
