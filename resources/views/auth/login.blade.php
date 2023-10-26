@extends('layouts.auth-master')

@section('content')
    {{--    <form action="/login" method="post" >
            @csrf
            username/email
            <input type="text" name="username" id="" placeholder="username"> 

            password
            <input type="password" name="password" id="" placeholder="password"> 

            <input type="submit" value="Login">
        </form>
    --}}

    <form action="/login" method="post" >
        @csrf
        <h1>LOGIN</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"> We ll never share your email with anyone else. </div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <a href="/register"> Crea cuenta </a>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection

