<?php

namespace App\Http\Controllers;

use App\Models\CATEGORIA;
use App\Models\PRODUTO;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function categoryFillproductsPage(CATEGORIA $id){

        return view('products.FilledByCategory', ['products' => PRODUTO::where('CATEGORIA_ID', $id)->where('PRODUTO_ATIVO', 1)->take(12)->get(), 'categories' => CATEGORIA::all()->take(4)]);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['products' => PRODUTO::orderBy('PRODUTO_ID', 'desc')->where('PRODUTO_ATIVO', 1)->take(12)->get(), 'categories' => CATEGORIA::all()->take(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search()
    {
        $query = PRODUTO::query();
        $query->where('PRODUTO_ATIVO', 1);

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

        $productsPerPage = !empty($_GET['productsPerPage']) ? $_GET['productsPerPage'] : 12;
        $query = $query->paginate($productsPerPage);

        
        if (!empty($_GET['productsPerPage']) && !empty($_GET['takeFormat']) && !empty($_GET['PRODUTO_NOME'])) {
            if ($query->isEmpty()) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'productsPerPage' => $productsPerPage,
                'takeFormat' => $takeFormat,
                'products' => $query,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($_GET['productsPerPage']) && !empty($_GET['takeFormat']) && !empty($minPrice) && !empty($maxPrice) && !empty($_GET['PRODUTO_NOME'])) {
            if ($query->isEmpty()) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'productsPerPage' => $productsPerPage,
                'takeFormat' => $takeFormat,
                'products' => $query,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($_GET['takeFormat']) && !empty($minPrice) && !empty($maxPrice) && !empty($_GET['PRODUTO_NOME'])) {
            if ($query->isEmpty()) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'takeFormat' => $takeFormat,
                'products' => $query,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($minPrice) && !empty($maxPrice) && !empty($_GET['PRODUTO_NOME'])) {
            if ($query->isEmpty()) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice,
                'products' => $query,
                'categories' => CATEGORIA::all()
            ]);
        }

        if (!empty($_GET['PRODUTO_NOME'])) {
            if ($query->isEmpty()) {
                return view('products.emptySearch');
            }
            return view('products.searchProducts', [
                'searchTerm' => $searchTerm,
                'products' => $query,
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
