<?php

namespace App\Http\Controllers;

use App\Models\CARRINHOITEM;
use App\Models\CATEGORIA;
use App\Models\PEDIDOITEM;
use App\Models\PRODUTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function productDetails(PRODUTO $id){

        if (auth()->check()) {
            $userId = Auth::user();
            $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $userId->USUARIO_ID);
            return view('products.productDetails', ['product' => $id, 'products' => PRODUTO::all(), 'categories' => CATEGORIA::all(), 'user' => $userId, 'productsByUser' => $productsByUser]);
        }
        return view('products.productDetails', ['product' => $id, 'categories' => CATEGORIA::all(), 'products' => PRODUTO::all()] );
    }

    public function index()
    {
        if (auth()->check()) {
            $userId = Auth::user();
            $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $userId->USUARIO_ID);
            
            $bestSellingItems = PEDIDOITEM::select('PRODUTO_ID', DB::raw('COUNT(*) as total_occurrences'))
            ->groupBy('PRODUTO_ID')
            ->orderBy('total_occurrences', 'desc')
            ->get();

            $orderedItems = collect();

            foreach ($bestSellingItems as $item) {
                $product = PRODUTO::find($item->PRODUTO_ID);
                $orderedItems->push($product);
            }
            
            return view('index', ['products' => PRODUTO::orderBy('PRODUTO_ID', 'desc')->where('PRODUTO_ATIVO', 1)->take(12)->get(), 'categories' => CATEGORIA::all()->take(4), 'user' => $userId, 'productsByUser' => $productsByUser, 'bestSellers' => $orderedItems]);
        }

        $bestSellingItems = PEDIDOITEM::select('PRODUTO_ID', DB::raw('COUNT(*) as total_occurrences'))
            ->groupBy('PRODUTO_ID')
            ->orderBy('total_occurrences', 'desc')
            ->get();

        $orderedItems = collect();

        foreach ($bestSellingItems as $item) {
            $product = PRODUTO::find($item->PRODUTO_ID);
            $orderedItems->push($product);
        }

        return view('index', ['products' => PRODUTO::orderBy('PRODUTO_ID', 'desc')->where('PRODUTO_ATIVO', 1)->take(12)->get(), 'categories' => CATEGORIA::all()->take(4), 'bestSellers' => $orderedItems]);
    }

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

        
        if (auth()->check()) {
            $userId = Auth::user();
            $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $userId->USUARIO_ID);
            return view('products.searchProducts', [
                'searchTerm' => (isset($searchTerm))?$searchTerm:'',
                'productsPerPage' => (isset($productsPerPage)?$productsPerPage:''),
                'takeFormat' => (isset($takeFormat)?$takeFormat:''),
                'products' => $query,
                'categories' => CATEGORIA::all(),
                'minPrice' => (isset($minPrice))?$minPrice:'',
                'maxPrice' => (isset($maxPrice))?$maxPrice:'',
                'user' => $userId,
                'productsByUser' => $productsByUser
            ]);
        }else{
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
    }
}
