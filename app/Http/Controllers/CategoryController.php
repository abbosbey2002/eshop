<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $admin=session('username');
        if(isset($admin)){

            $categorys=Category::all();

            return view('category.index')->with('categorys', $categorys);

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

            return view('category.create');

        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //

        $admin=session('username');
        if(isset($admin)){

            $newCategory=Category::create([
                'name'=>$request->name,
                'category_id'=>$request->category_id,
            ]);

        }else{
            return view('login')->with('error', 'user');
        }

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        $admin=session('username');
        if(isset($admin)){

            return view('category.edit')->with('category', $category);
        }else{
            return view('login')->with('error', 'user');
        }
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //

        $admin=session('username');
        if(isset($admin)){
            $category->update([
                'name' => $request->name,
                'category_id'=>$request->category_id,
            ]);

            return redirect()->route('category.index');


        }else{
            return view('login')->with('error', 'user');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //

        $admin=session('username');
        if(isset($admin)){
            $category->delete();

            return redirect()->route('category.index');


        }else{
            return view('login')->with('error', 'user');
        }

    }
}
