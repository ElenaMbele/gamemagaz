<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Parsedown;

const PRODUCTS_PAR_PAGE = 6;

class MainController extends Controller
{
    function index()
    {
        $products = Product::query()->take(PRODUCTS_PAR_PAGE)->orderBy('id', 'DESC')->get();
        return view('main', ['products' => $products]);
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        return view('news');
    }

    public function basket()
    {
        return view('basket');
    }

    public function category(Category $category)
    {
        $categoriesProducts = Product::where('category', $category->name)->get();
        return view('category', [
            'category' => $category,
            'categoriesProducts' => $categoriesProducts,
        ]);
    }

    public function product(Product $product)
    {
        $Parsedown = new Parsedown();
        $product->description = $Parsedown->text($product->description); # prints: <p>Hello <em>Parsedown</em>!</p>
        $products = Product::query()->take(3)->orderBy('id', 'DESC')->get();
        return view('product', ['product' => $product, 'products' => $products]);
    }
}
