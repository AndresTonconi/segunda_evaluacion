<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Validación simple (reemplazar con lógica real, como consulta a base de datos)
        if ($request->username === 'admin' && $request->password === 'password') {
            return redirect()->route('dashboard')->with('success', '¡Inicio de sesión exitoso!');
        }

        return back()->withErrors(['username' => 'Credenciales inválidas']);
    }
}