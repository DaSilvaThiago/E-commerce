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
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        $addressByUser = ENDERECO::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        return view('profile.order', [
            'productsByUser' => $productsByUser,
            'categories' => CATEGORIA::all(),
            'addressByUser' => $addressByUser,
            'user' => Auth::user()
        ]);
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
        $userId = Auth::id();
        $address = $request->ENDERECO_ID; 
        $status = PEDIDOSTATUS::where('STATUS_ID', 5)->value('STATUS_ID');
        $date = today()->format('d-m-Y');
        
        PEDIDO::create([
            'USUARIO_ID' => $userId,
            'ENDERECO_ID' => $address,
            'STATUS_ID' => $status,
            'PEDIDO_DATA' => $date,
        ]);

        dd(PEDIDO::all());
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        

        // foreach ($productsByUser as $product => $value) {
        //     dd($value);
            
        //     PEDIDOITEM::create([
        //         'PRODUTO_ID' => $value->PRODUTO_ID,
        //         'PRODUTO_ID' => $value->PRODUTO_ID,
        //     ]);
        // }

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
