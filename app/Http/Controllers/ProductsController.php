<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showProducts()
    {
        return view('kasir.products.index');
    }

    public function index()
    {
        $data = Products::all();
        return view('kasir.products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Products::create($request->only(['nama','kategori', 'price', 'stok']));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('kasir.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $product->update($request->only(['nama', 'kategori', 'price', 'stok']));
        return redirect()->route('kasir.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('kasir.products.index');
    }
}
