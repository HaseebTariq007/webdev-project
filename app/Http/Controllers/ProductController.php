<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
    Log::info($request->all());  // Log data to storage/logs/laravel.log
    $product = new Product([
        'name' => $request->name,
        'original_price' => $request->original_price,
        'discounted_price' => $request->discounted_price,
        'description' => $request->description,
    ]);

    $product->save();

    return response()->json(['success' => 'Product added successfully!']);
    }

}
