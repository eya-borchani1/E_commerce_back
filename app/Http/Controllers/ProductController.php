<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
           public function __construct()
    {
        $this->model = Product::class; // Inject the model to use
    }

    public function store(Request $request)
{   
   // return 245545;
    $request->validate([
        'name' => 'required|min:2',
        'description' => 'required|min:2',
        'prix' => 'required|numeric|min:0',
        'qte' => 'required|numeric|min:0',
        'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    $path = $request->file('image')->store('images/products', 'public');

    $product = Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'prix' => $request->prix,
        'qte' => $request->qte,
        'image' => $path,
    ]);

    return response()->json($product, 201);
}

}
