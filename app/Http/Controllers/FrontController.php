<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class FrontController extends Controller
{
    //

    public function index(){
        $cont=Contact::all();
        $contact=$cont[0] ?? '+998994288038';
        $product=Product::paginate(25);
        $categorys=Category::all();
        return view('frontend.index')->with('products', $product)->with('categorys', $categorys)->with('contact', $contact->phone ?? '998994288038');
    }

    public function search(Request $request){

        $search = $request->input('search');
        $categorys=Category::all();
        $cont=Contact::all();
        $contact=$cont[0] ?? '+998994288038';

        $products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();


        return view('frontend.index', compact('products'))->with('categorys', $categorys)->with('contact', $contact->phone ?? '998994288038');
    }

    public function update(Request $req){
        $cont=Contact::all();
        $contact=$cont[0] ?? '+998994288038';
        $product=Product::where('category', $req->category)->paginate(25);
        $categorys=Category::all();
        // dd($req->category);

        return  view('frontend.index')->with('products', $product)->with('categorys', $categorys)->with('contact', $contact->phone);
    }

    public function show(Request $req){
        $cont=Contact::all();
        $contact=$cont[0] ?? '+998994288038';

        $product=Product::find($req->single);
    //   dd($req->single);



        return view('frontend.product')->with('product', $product)->with('contact', $contact->phone ?? '998994288038');

    }
}
