<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Funzione Logout 
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");
    }

    // Mostra login form
    public function login() {
        return view('utenti.login');
    }

    // Effettua il logout
    public function authenticate(Request $request) {
        $form = $request->validate([
            'username' => ['required', 'max:15'],
            'password' => ['required', 'max:64']
        ]);

        if(auth()->attempt($form)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['username' => 'Credenziali non valide'])->onlyInput('username');
    }
}
