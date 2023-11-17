<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CARRINHOITEM;
use App\Models\CATEGORIA;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(User $id)
    {
        $productsByUser = CARRINHOITEM::all()->where('USUARIO_ID', $id->USUARIO_ID);
        return view('profile.edit', [
            'productsByUser' => $productsByUser,
            'user' => $id,
            'categories' => CATEGORIA::all()
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = User::find($request->user()->USUARIO_ID);

        $currentPassword = $request->USUARIO_SENHA;
        $newPassword = $request->USUARIO_SENHANOVA;
    
        if (Hash::check($currentPassword, $user->USUARIO_SENHA)) {
            $user->USUARIO_SENHA = Hash::make($newPassword);
        } else {
            return Redirect::back()->withErrors(['USUARIO_SENHA' => 'Digite a senha antiga corretamente!']);
        }

        $user->USUARIO_NOME = $request->USUARIO_NOME;
        $user->USUARIO_CPF = $request->USUARIO_CPF;
        $user->USUARIO_EMAIL = $request->USUARIO_EMAIL;

        $user->save();

        return Redirect::back()->with(['set' => 'Dados atualizados com sucesso!']);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
