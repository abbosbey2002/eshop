<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admin=session('username');
        if(isset($admin)){

            $products=Product::where('author', $admin)->get();

            return view('product.index')->with('products', $products);
        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $admin=session('username');
        if(isset($admin)){

            $categorys=Category::all();
            return view('product.create')->with('categorys', $categorys);

        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Store a newly created resource in storage.
     */



    public function store(StoreProductRequest $req)
    {
        //

        if($req->hasFile('image')){

            $path=$req->file('image')->store('productimage');
        }

        $admin=session('username');
        if(isset($admin)){

            $newproduct=Product::create([
                'name'=>$req->name,
                'description'=>$req->description,
                'category'=>$req->category,
                'author' => $admin,
                'image'=>$path ?? null,
                'price'=>$req->price
               ]);
               return redirect()->route('product.index');

        }else{
            return view('login')->with('error', 'user');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //

        $admin=session('username');
        if(isset($admin)){
            return view('product.show')->with('product', $product);
        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $admin=session('username');
        if(isset($admin)){

            $categorys=Category::all();
            return view('product.edit')->with('product', $product)->with('categorys', $categorys);
        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $req, Product $product)
    {


        if($req->hasFile('image')){
            // dd($req->image);
            if(isset($product->image)){
                Storage::delete($product->image);
            }
            $path=$req->file('image')->store('productimage');

        }
        //
        $admin=session('username');
        if(isset($admin)){

            $product->update([
                'name' => $req->name,
                'description' => $req->description,
                'image' => $path ?? $product->image,
                'category'=>$req->category,
                'price' => $req->price
            ]);
            return redirect()->route('product.index');

        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //


        $admin=session('username');
        if(isset($admin)){

            $product->delete();

            Storage::delete($product->image);

            return redirect()->route('product.index');

        }else{
            return view('login')->with('error', 'user');
        }
    }
}
