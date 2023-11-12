<?php

namespace App\Http\Controllers;

use App\Models\CARRINHOITEM;
use App\Models\PRODUTO;
use Illuminate\Http\Request;

class CarrinhoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productId = $request->input('PRODUTO_ID');
        $quantity = $request->input('ITEM_QTD');
    
        $product = PRODUTO::find($productId);
    
        if (!$product->produtoEstoque <= 0) {
            return redirect()->back()->with('PRODUTO SEM ESTOQUE');
        }
    
        $cart = CARRINHOITEM::get();
    
        if ($cart->has($productId)) {
            $cart->update($productId, $cart->get($productId)['ITEM_QTD'] + $quantity);
        } else {
            $cart->add($productId, $product->PRODUTO_NOME, $product->PRODUTO_PRECO, $quantity);
        }
    
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
