<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy('id','desc')->paginate(9);
        $categories = Category::orderBy('name','asc')->get();
        $category=$request->get('category');

        if($category) {
            $category=$request->get('category');
            $products = Product::whereHas('categories', function($q) use ($category) {
                $q->where('category_id', $category);
            })->paginate(9);

        } else {
            $products = Product::orderBy('id','desc')->paginate(9);
        }
        return view('welcome',compact('products','categories'));
    }

    public function show($id)
    {
        $title = "Hola-Halo | Show/Detail Produk";
        $product = Product::findOrFail($id);
        return view('show',compact('product','title'));
    }
}
