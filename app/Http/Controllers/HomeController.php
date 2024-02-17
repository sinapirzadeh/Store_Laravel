<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function store()
    {
        $products = Product::all();
        return view('store', ['products' => $products]);
    }

    public function search()
    {
        $results = Product::where('name', 'like', '%' . request('search') . '%')->get();
        return view('search', [
            'results' => $results
        ]);
    }

    public function showProduct(Product $slug)
    {
        return view('product-details', [
            'product' => $slug,
            'comments' => Comment::where('product_id', $slug->product_id    )->get()
        ]);
    }
}
