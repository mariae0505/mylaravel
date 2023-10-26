<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class RegisterController extends Controller
{

    public function show(){
        if(Auth::check()){
             Log::channel('stderr')->info('autenticado');
            return redirect('/home');
        }

        return view('auth.register') ;

    }

    public function register(RegisterRequest $request){
        Log::channel('stderr')->info('Register entrando');
       $user=User::create($request->validated());
       Log::channel('stderr')->info('Register validado');
       return redirect('/login')->with('success','Cuenta creada'); 
    }
} 