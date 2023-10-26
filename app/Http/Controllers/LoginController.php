<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{

    public function show(){
        Log::channel('stderr')->info('loginshow');
        if(Auth::check()){
            Log::channel('stderr')->info('autenticado');
            return redirect('/home');
        }
        return view('auth.login') ;

    }

    public function login(LoginRequest  $request){
    //1- obtener credenciales email y password  o username y password 
    $credentials = $request->getCredentials();
    
    // clase Auth metodo validate valida las credenciales que ya obtuvimos de LoginRequest
    if(!Auth::validate($credentials)){
        // metodo withErrors y dentro auth.failed que es elvalidador que estamos usando
        return redirect()->to('/login')->withErrors('Usuario y/o clave incorrectos');
   }
   //validado: crear usuario a partir de la autenticacion de las mismas credenciales que estamos obteniendo
   $user = Auth::getProvider()->retrieveByCredentials($credentials);
   
   //ya hay funcion para login 
   Auth::login($user);
   //mandamos el objeto de que estamos autenticados - hacemos la funcion authenticated
   return $this->authenticated($request, $user);

    }

    public function authenticated(Request $request, $user) 
    {
        return redirect('/home');
    }
    
}
