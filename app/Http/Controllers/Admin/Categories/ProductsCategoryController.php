<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories\ProductsCategory;
use App\Http\Requests\CategoryRequests;

class ProductsCategoryController extends Controller
{

    public function index()
    {
        return view('Admin.categories.products.list', [
            'categories' => ProductsCategory::all()->where('parent_id', '')
        ]);
    }


    public function store(CategoryRequests $request)
    {
        $validate_data = $request->validated();

        $imagepath = $request->file('image')->store('public/category/product');

        ProductsCategory::create([
            'title' => $validate_data['title'],
            // 'slug' => $validate_data['title'],
            'parent_id' => $request->parent_category,
            'description' => $request->description,
            'image' => $imagepath
        ]);

        return redirect('/admin/products_category');
    }


    public function edit(ProductsCategory $slug)
    {
        return view(
            'admin.categories.products.edit',
            [
                'category' => $slug,
                'categories' => ProductsCategory::all()->where('parent_id', '')
            ]
        );
    }


    public function update(CategoryRequests $request, ProductsCategory $slug)
    {
        $validate_data = $request->validated();


        $imagepath = $request->file('image')->store('public/category/product');

        $slug->update([
            'title' => $validate_data['title'],
            // 'slug' => $validate_data['title'],
            'parent_id' => $request->parent_category,
            'description' => $request->description,
            'image' => $imagepath
        ]);

        return redirect('/admin/products_category');
    }


    public function destroy(ProductsCategory $slug)
    {
        // todo: set condition for delete!
        $slug->delete();
        return back();
    }
}
