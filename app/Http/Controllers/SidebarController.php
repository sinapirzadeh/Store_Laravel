<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories\ProductsCategory;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index() {
        return view('layouts.sidebar', [
            'categories' =>  ProductsCategory::all()
        ]);
    }
}
