<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric', // ubah ke numeric biar validasinya pas
        ]);
        
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price, // langsung simpan tanpa ubah format
        ]);
        
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);
    
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
    
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        foreach ($product->subscriptions as $subscription) {
            // Hapus customer jika ada
            if ($subscription->customer) {
                $subscription->customer->delete();
            }
    
            // Hapus subscription-nya
            $subscription->delete();
        }
    
        // Terakhir hapus produk-nya
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk dan relasi terkait berhasil dihapus!');
    }


}
