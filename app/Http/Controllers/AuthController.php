<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:20',
        ], [
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El formato del email no es válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.max' => 'La contraseña no puede superar los :max caracteres.',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('auth.login.form')
                ->withInput()
                ->with('feedback.message', 'El email ingresado no está registrado.')
                ->with('feedback.type', 'danger');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route('auth.login.form')
                ->withInput()
                ->with('feedback.message', 'La contraseña ingresada no es correcta.')
                ->with('feedback.type', 'danger');
        }

        session(['user_id' => $user->id]);

        return redirect()->route('bags.index')
            ->with('feedback.message', '¡Bienvenido! Has iniciado sesión.')
            ->with('feedback.type', 'success');
    }

    public function logout()
    {
        session()->forget('user_id');

        return redirect()->route('auth.login.form')
            ->with('feedback.message', '¡Hasta la próxima! La sesión se cerró correctamente.')
            ->with('feedback.type', 'success');
    }
}