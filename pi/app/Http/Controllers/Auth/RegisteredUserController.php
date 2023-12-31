<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CATEGORIA;
use App\Models\User;
use App\Models\USUARIO;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', ['categories'=>CATEGORIA::all()]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'USUARIO_NOME' => ['required'],
            'USUARIO_EMAIL' => ['required', 'lowercase', 'email','unique:'.User::class],
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

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
