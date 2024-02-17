<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Categories\ProductsCategory;
use App\Models\Product\Product;
use App\Http\Requests\ProductRequests;

class ProductController extends Controller
{

    public function index()
    {
        // $products = Product::all()->where('stock');
        $products = Product::all();
        $categories = ProductsCategory::all()->where('parent_id', '!=', '');
        if ($categories != null) {
            return view('admin.product.list', [
                'categories' => $categories,
                'products' => $products
            ]);
        } else
            return redirect('/admin/products_category');
    }

    public function create()
    {
        //
    }


    public function store(ProductRequests $request)
    {
        $validate_data = $request->validated();

        $imagepath = $request->file('image')->store('public/product');

        Product::create([
            'category_id' => $request->child_category,
            'name' => $validate_data['name'],
            'price' => $validate_data['price'],
            'description' => $validate_data['description'],
            'brand' => $validate_data['brand'],
            'stock' => $request->input('stock', 1),
            'image' => $imagepath
        ]);

        return redirect('/admin/products');
    }



    public function edit(Product $slug)
    {
        $categories = ProductsCategory::all()->where('parent_id', '!=', '');
        return view('admin.product.edit', [
            'categories' => $categories,
            'product' => $slug
        ]);
    }


    public function update(ProductRequests $request, Product $slug)
    {
        $validate_data = $request->validated();

        $imagepath = $request->file('image')->store('public/product');

        $slug->update([
            'category_id' => $request->child_category,
            'name' => $validate_data['name'],
            'price' => $validate_data['price'],
            'description' => $validate_data['description'],
            'brand' => $validate_data['brand'],
            'stock' => $request->input('stock', 1),
            'image' => $imagepath
        ]);

        return redirect('/admin/products');
    }


    public function destroy(Product $slug)
    {
        $slug->delete();
        return back();
    }
}
