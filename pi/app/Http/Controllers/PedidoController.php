<?php

namespace App\Http\Controllers;

use App\Models\CARRINHOITEM;
use App\Models\CATEGORIA;
use App\Models\ENDERECO;
use App\Models\PEDIDO;
use App\Models\PEDIDOITEM;
use App\Models\PEDIDOSTATUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderStatus = PEDIDOSTATUS::all();
        $address = ENDERECO::all();
        $ordersTolist = PEDIDO::where('USUARIO_ID', Auth::user()->USUARIO_ID)->OrderByDesc('PEDIDO_ID')->paginate(3);
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);

        return view('profile.order.list', [
            'categories' => CATEGORIA::all(),
            'productsByUser' => $productsByUser,
            'orderStatus' => $orderStatus,
            'address' => $address,
            'orders' => PEDIDO::where('USUARIO_ID', Auth::user()->USUARIO_ID),
            'ordersTolist' => $ordersTolist,
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        $addressByUser = ENDERECO::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        return view('profile.order.order', [
            'productsByUser' => $productsByUser,
            'categories' => CATEGORIA::all(),
            'addressByUser' => $addressByUser,
            'user' => Auth::user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $address = $request->ENDERECO_ID; 
        $status = PEDIDOSTATUS::where('STATUS_ID', 5)->value('STATUS_ID');
        $date = today()->format('d-m-Y');
        
        if (!$address) {
            return redirect()->back()->withErrors(['address' => 'Escolha algum endereço']);
        }
        
        PEDIDO::create([
            'USUARIO_ID' => $userId,
            'ENDERECO_ID' => $address,
            'STATUS_ID' => $status,
            'PEDIDO_DATA' => $date,
        ]);

        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);

        $order_id = PEDIDO::orderBy('PEDIDO_ID', 'desc')->first()->PEDIDO_ID;
        
       
        foreach ($productsByUser as $value) {
            
            $product_id = $value->produto->PRODUTO_ID;
            $productQtt = $value->ITEM_QTD;
            $productPrice = ($value->produto->PRODUTO_PRECO - $value->produto->PRODUTO_DESCONTO) * $value->ITEM_QTD; 
            
            if ($productPrice > 999) {
                $productPrice = 999.99;
            }
            if ($productQtt > 0) {
                
                PEDIDOITEM::create([
                    'PRODUTO_ID' => $product_id,
                'PEDIDO_ID' => $order_id,
                'ITEM_QTD' => $productQtt,
                'ITEM_PRECO' => $productPrice,
            ]);
        }
            
            $item = CARRINHOITEM::where('USUARIO_ID', Auth::user()->USUARIO_ID)
            ->where('PRODUTO_ID', $product_id)
            ->first();

            if ($item) {
                $item->ITEM_QTD = 0;
                $item->save();
            }
 
        }
        return $this->success($order_id);
    }

    /**
     * Display the specified resource.
     */
    public function success($id)
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        return view('profile.order.successOrder', [
            'categories' => CATEGORIA::all(),
            'productsByUser' => $productsByUser,
            'order' => $id,
            'user' => Auth::user()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function manage(PEDIDO $id)
    {
        $order = $id;
        $orderItems = PEDIDOITEM::all()->where('PEDIDO_ID', $id->PEDIDO_ID);
        $orderStatus = PEDIDOSTATUS::all();
        $address = ENDERECO::all();
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        return view('profile.order.manageOrder', [
            'categories' => CATEGORIA::all(),
            'order' => $order,
            'categories' => CATEGORIA::all(),
            'productsByUser' => $productsByUser,
            'orderItems' => $orderItems,
            'orderStatus' => $orderStatus,
            'address' => $address,
            'orders' => PEDIDO::all()->where('USUARIO_ID', $id->USUARIO_ID),
            'user' => Auth::user()
        ]);
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
