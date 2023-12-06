<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->input('sort_by', 'id'); 
        $sortOrder = $request->input('sort_order', 'asc');

        if ($request->has('sort_by') && $request->has('sort_order')) {
            $products = Product::orderBy($sortBy, $sortOrder)->select('id', 'name', 'price','photo_url')->get();
        } else {
            $products = Product::select('id', 'name', 'price','photo_url')->get();
        }

        return $products;
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }
}
