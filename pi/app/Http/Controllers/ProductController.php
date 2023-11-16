<?php

namespace App\Http\Controllers;

use App\Models\CARRINHOITEM;
use App\Models\CATEGORIA;
use App\Models\PRODUTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function productDetails(PRODUTO $id){
        
        return view('products.productDetails', ['product' => $id, 'categories' => CATEGORIA::all()] );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            $userId = Auth::user();
            $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $userId->USUARIO_ID);
            return view('index', ['products' => PRODUTO::orderBy('PRODUTO_ID', 'desc')->where('PRODUTO_ATIVO', 1)->take(12)->get(), 'categories' => CATEGORIA::all()->take(4), 'user' => $userId, 'productsByUser' => $productsByUser]);
        }
    
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

        if (!empty($_GET['CATEGORIA_ID'])) {
            $category = $_GET['CATEGORIA_ID'];
            $query->where('CATEGORIA_ID', $category);
        }

        if (!empty($_GET['orberByNew'])) {
            $searchTerm = $_GET['orberByNew'];
            $query->orderBy('PRODUTO_ID','desc');
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

        
      
            if ($query->isEmpty()) {
                return view('products.emptySearch', ['categories'=>CATEGORIA::all()]);
            }
            return view('products.searchProducts', [
                'searchTerm' => (isset($searchTerm))?$searchTerm:'',
                'productsPerPage' => (isset($productsPerPage)?$productsPerPage:''),
                'takeFormat' => (isset($takeFormat)?$takeFormat:''),
                'products' => $query,
                'categories' => CATEGORIA::all(),
                'minPrice' => (isset($minPrice))?$minPrice:'',
                'maxPrice' => (isset($maxPrice))?$maxPrice:'',
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
