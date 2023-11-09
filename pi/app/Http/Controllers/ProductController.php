<?php

namespace App\Http\Controllers;

use App\Models\CATEGORIA;
use App\Models\PRODUTO;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['products' => PRODUTO::orderBy('PRODUTO_ID', 'desc')->take(12)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search()
    {
        $query = PRODUTO::query();

        if (!empty($_GET['PRODUTO_NOME'])) {
            $searchTerm = $_GET['PRODUTO_NOME'];
            $query->where('PRODUTO_NOME', 'like', '%' . $searchTerm . '%');
        }

        if (!empty($_GET['minPrice']) && !empty($_GET['maxPrice'])) {
            $minPrice = $_GET['minPrice'];
            $maxPrice = $_GET['maxPrice'];
            $query->whereBetween('PRODUTO_PRECO', [$minPrice, $maxPrice]);
        }

        $searchResults = $query->get();

        if (!empty($minPrice) && !empty($maxPrice)) {
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'products' => $searchResults,
                'categories' => CATEGORIA::all()
            ]);
        }
        return view('products.searchProducts', [
            'searchTerm' => $searchTerm,
            'products' => $searchResults,
            'categories' => CATEGORIA::all()
        ]);
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


    public function show(string $id)
    {
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
