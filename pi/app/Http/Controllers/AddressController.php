<?php

namespace App\Http\Controllers;

use App\Models\CARRINHOITEM;
use App\Models\CATEGORIA;
use App\Models\ENDERECO;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $id)
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $id->USUARIO_ID);
        $addressByUser = ENDERECO::all()->where('USUARIO_ID', $id->USUARIO_ID);
        return view('profile.address.index', [
            'productsByUser' => $productsByUser,
            'addressByUser' => $addressByUser,
            'categories' => CATEGORIA::all(),
            'user' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $id)
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $id->USUARIO_ID);
        return view('profile.address.create', [
            'productsByUser' => $productsByUser,
            'categories' => CATEGORIA::all(),
            'user' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $id)
     {
        $request->validate([
            'ENDERECO_NOME' => ['required'],
            'ENDERECO_LOGRADOURO' => ['required'],
            'ENDERECO_NUMERO' => ['required', 'numeric'],
            'ENDERECO_CEP' => ['required', 'max:8'],
            'ENDERECO_CIDADE' => ['required'],
            'ENDERECO_ESTADO' => ['required', 'max:2'],
        ]);
        ENDERECO::create([
            'USUARIO_ID' => $id->USUARIO_ID,
            'ENDERECO_NOME' => $request->ENDERECO_NOME,
            'ENDERECO_LOGRADOURO' => $request->ENDERECO_LOGRADOURO,
            'ENDERECO_NUMERO' => $request->ENDERECO_NUMERO,
            'ENDERECO_COMPLEMENTO' => $request->ENDERECO_COMPLEMENTO,
            'ENDERECO_CEP' => $request->ENDERECO_CEP,
            'ENDERECO_CIDADE' => $request->ENDERECO_CIDADE,
            'ENDERECO_ESTADO' => $request->ENDERECO_ESTADO
        ]);
        return redirect(route('profile.address', $id->USUARIO_ID));
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
    public function edit(ENDERECO $id)
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $id->USUARIO_ID);
        $addressByUser = ENDERECO::find($id->ENDERECO_ID);
        return view('profile.address.edit', [
            'productsByUser' => $productsByUser,
            'addressByUser' => $addressByUser,
            'categories' => CATEGORIA::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ENDERECO $id)
    {
        $request->validate([
            'ENDERECO_NOME' => ['required'],
            'ENDERECO_LOGRADOURO' => ['required'],
            'ENDERECO_NUMERO' => ['required', 'numeric'],
            'ENDERECO_CEP' => ['required', 'max:8'],
            'ENDERECO_CIDADE' => ['required'],
            'ENDERECO_ESTADO' => ['required', 'max:2'],
        ]);
        $id->update([
            'ENDERECO_NOME' => $request->ENDERECO_NOME,
            'ENDERECO_LOGRADOURO' => $request->ENDERECO_LOGRADOURO,
            'ENDERECO_NUMERO' => $request->ENDERECO_NUMERO,
            'ENDERECO_COMPLEMENTO' => $request->ENDERECO_COMPLEMENTO,
            'ENDERECO_CEP' => $request->ENDERECO_CEP,
            'ENDERECO_CIDADE' => $request->ENDERECO_CIDADE,
            'ENDERECO_ESTADO' => $request->ENDERECO_ESTADO
        ]);
        return redirect(route('profile.address', $id->USUARIO_ID));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
