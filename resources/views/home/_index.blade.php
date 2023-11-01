@extends('layouts.app-master')
@section('content')
    <h1> Home </h1>
    @auth
        <p >Bienvenido {{auth()->user()->name  ?? auth()->user()->username}}  autenticado .</p>
        <a href="/logout"> Salir </a </p>
    @endauth
    @guest
        <p >Aceeso limitado.
            <a href="/login"> inicia </a </p>
        </p>
    @endguest
@endsection

