<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function index(){
        $titulo = 'login de usuarios' ;
        return view('modules.auth.login', compact("titulo"));
    }

    public function logear(Request $request){
        //validar datos de las credenciales 
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);    

        $user = User::where('email', $request['email'])->first();

        //Validar usuario y contraseña
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
        }
        // el usuario esta Activo
        if(!$user->activo){
            return back()->withErrors(['email' => 'Tu cuenta esta inactiva'])->withInput();
        }
        
            //Crear la sesion de usuario
            Auth::login($user);
            
            $request->session()->regenerate();

            return redirect()->route('home');
    }

    public function crearAdmin(){
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'activo' => true,
            'rol' => 'admin',
        ]);
        return "Se ha creado el usuario admin";
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
