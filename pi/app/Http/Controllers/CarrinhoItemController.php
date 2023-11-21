<?php

namespace App\Http\Controllers;

use App\Models\CARRINHOITEM;
use App\Models\CATEGORIA;
use App\Models\PRODUTO;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CarrinhoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', Auth::user()->USUARIO_ID);
        return view('profile.cart', [
            'productsByUser' => $productsByUser,
            'categories' => CATEGORIA::all(),
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
        $user_id = $request->input('USUARIO_ID');
        $produto_id = $request->input('PRODUTO_ID');
    
        $item = CARRINHOITEM::where('USUARIO_ID', $user_id)
            ->where('PRODUTO_ID', $produto_id)
            ->first();
    
        if ($item) {
                $item->ITEM_QTD = $request->input('ITEM_QTD');
                $item->save();
                return Redirect::back();
        }else {
            CARRINHOITEM::create($request->all());
            return redirect(route('products.index'));
        }
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
    public function update($user_id, $produto_id)
    {
        $item = CARRINHOITEM::where('USUARIO_ID', $user_id)
            ->where('PRODUTO_ID', $produto_id)
            ->first();

        if ($item) {
            $item->ITEM_QTD = 0;
            $item->save();
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
