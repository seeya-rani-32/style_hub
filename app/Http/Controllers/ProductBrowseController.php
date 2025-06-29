<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductBrowseController extends Controller
{
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function categories()
    {
        $categories = Category::all();
        $randomProducts = Product::inRandomOrder()->take(9)->get();

        return view('products.categories', compact('categories', 'randomProducts'));
    }

    public function productsByCategory(Category $category)
    {
        $products = $category->products()->latest()->get();
        return view('products.index', compact('products', 'category'));
    }
}
