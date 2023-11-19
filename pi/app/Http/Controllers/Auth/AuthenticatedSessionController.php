<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\CATEGORIA;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login', ['categories' => CATEGORIA::all()]);
    }
    
    public function store(LoginRequest $request): RedirectResponse
    {
        if (User::where('USUARIO_EMAIL', $request->USUARIO_EMAIL)->first()) {
            $usuario = User::where('USUARIO_EMAIL', $request->USUARIO_EMAIL)->first();
        }else {
            return Redirect::back()->withErrors(['error' => 'Digite os dados corretamente!']);
        }
        if(Hash::check($request->USUARIO_SENHA, $usuario->USUARIO_SENHA)){
            Auth::login($usuario);
            return redirect("/");
        }else{
            return Redirect::back()->withErrors(['error' => 'Digite os dados corretamente!']);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
