<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function login(LoginFormRequest $request): RedirectResponse
    {
        if(!auth()->attempt($request->validated())) {
            return redirect()
                ->route('login')
                ->withErrors(['email' => 'The user was not found or the data was entered incorrectly']);
        }

        return redirect()->route('home');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
