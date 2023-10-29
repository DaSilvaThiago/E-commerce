<?php

namespace App\Http\Controllers;

use App\Models\PRODUTO;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produtos.index', ['produtos' => PRODUTO::orderBy('PRODUTO_ID', 'desc')->take(12)->get()]);
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
        //
    }

    /**
     * Display the specified resource.
     */

    public function modalProduto(string $id){
        return view('modal.showProduct', ['produto' => $id]);
    }

    public function show(string $id)
    {
        return view('produtos.show', ['produtos' => PRODUTO::all()]);
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
