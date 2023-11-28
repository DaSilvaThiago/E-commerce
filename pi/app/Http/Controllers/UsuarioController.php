<?php

namespace App\Http\Controllers;

use App\Models\USUARIO;
use App\Http\Controllers\Controller;
use App\Models\CARRINHOITEM;
use App\Models\PEDIDO;
use App\Models\PEDIDOITEM;
use App\Models\CATEGORIA;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsuarioController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'USUARIO_NOME' => ['required'],
            'USUARIO_EMAIL' => ['required', 'lowercase', 'email','unique:'.USUARIO::class],
            'USUARIO_SENHA' => ['required'],
            'USUARIO_CPF' => ['required', 'max:11'],
        ]);

        $user = User::create([
            'USUARIO_NOME' => $request->USUARIO_NOME,
            'USUARIO_EMAIL' => $request->USUARIO_EMAIL,
            'USUARIO_SENHA' => Hash::make($request->USUARIO_SENHA),
            'USUARIO_CPF' => $request->USUARIO_CPF
        ]);

        event(new Registered($user));  

        return redirect(route('produtos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $id)
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $id->USUARIO_ID);
        return view('dashboard', [
            'productsByUser' => $productsByUser,
            'categories' => CATEGORIA::all(),
            'user' => $id,
            'orders' => PEDIDO::all()->where('USUARIO_ID', $id->USUARIO_ID),
            'itens' => PEDIDOITEM::all()
        ]);
        
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

}
