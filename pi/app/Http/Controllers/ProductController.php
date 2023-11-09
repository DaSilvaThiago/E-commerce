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

        if (!empty($_GET['takeFormat'])) {
            $takeFormat = $_GET['takeFormat'];
            if ($takeFormat === 'newest') {
                $query->orderBy('PRODUTO_ID','desc');
            } elseif ($takeFormat === 'latest') {
                $query->orderBy('PRODUTO_ID', 'asc');
            } elseif ($takeFormat === 'bestSelling') {
                $query->orderBy('PRODUTO_ID', 'asc'); //edit later
            } elseif ($takeFormat === 'lowestPrice') {
                $query->orderBy('PRODUTO_PRECO', 'asc');
            } elseif ($takeFormat === 'highestPrice') {
                $query->orderBy('PRODUTO_PRECO', 'desc');
            }
        }

        if (!empty($_GET['productsPerPage'])) {
            $productsPerPage = $_GET['productsPerPage'];
            $query->take($productsPerPage);
        }

        
        if (!empty($_GET['productsPerPage']) && !empty($_GET['takeFormat']) && !empty($_GET['PRODUTO_NOME'])) {
            $searchResults = $query->get();
            if ($searchResults->count() == 0) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'productsPerPage' => $productsPerPage,
                'takeFormat' => $takeFormat,
                'products' => $searchResults,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($_GET['productsPerPage']) && !empty($_GET['takeFormat']) && !empty($minPrice) && !empty($maxPrice) && !empty($_GET['PRODUTO_NOME'])) {
            $searchResults = $query->get();
            if ($searchResults->count() == 0) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'productsPerPage' => $productsPerPage,
                'takeFormat' => $takeFormat,
                'products' => $searchResults,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($_GET['takeFormat']) && !empty($minPrice) && !empty($maxPrice) && !empty($_GET['PRODUTO_NOME'])) {
            $searchResults = $query->take(12)->get();
            if ($searchResults->count() == 0) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'takeFormat' => $takeFormat,
                'products' => $searchResults,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($minPrice) && !empty($maxPrice) && !empty($_GET['PRODUTO_NOME'])) {
            $searchResults = $query->take(12)->get();
            if ($searchResults->count() == 0) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'products' => $searchResults,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($_GET['PRODUTO_NOME'])) {
            $searchResults = $query->take(12)->get();
            if ($searchResults->count() == 0) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'products' => $searchResults,
                'categories' => CATEGORIA::all()
            ]);
        }
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
