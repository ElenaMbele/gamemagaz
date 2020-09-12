<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showAddProductForm()
    {
        $categories = Category::all();
        return view('product.addForm', ['categories' => $categories]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move('img', $imageName);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->image = 'img/' . $imageName;
        $product->save();
        return redirect()->route('main');
    }

    public function showEditForm(Product $product)
    {
        $categories = Category::all();
        return view('product.editForm', ['product' => $product, 'categories' => $categories]);
    }

    public function edit(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
//        $product->category = $request->category;
        $product->save();

        return redirect()->route('main');
    }


    public function delete(Product $product)
    {
//        if(File::exists($product->image)) {
//            File::delete($product->image);
//        }
        $product->delete();
        return redirect()->route('main');

    }





}
