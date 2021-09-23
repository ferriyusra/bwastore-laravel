<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(16);

        return view('pages.category', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
