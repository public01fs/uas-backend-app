<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // return response()->json(Product::all(), 200); 
        // Mengambil produk beserta data kategorinya
        $products = Product::with('category')->get();
        return response()->json($products, 200); // Response JSON & Status Code [cite: 31, 32]
    }

    public function store(Request $request) {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function show($id) {
        $product = Product::find($id);
        if (!$product) return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($product, 200);
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy($id) {
        Product::destroy($id);
        return response()->json(['message' => 'Produk dihapus'], 200);
    }
}