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
    
    <div class="container  border border-primary px-5 ">
    <form action="/login" method="post" >
        @csrf
 
 
        <div class="container text-center">
            <div class="row">
              <div class="col"> </div>
              <div class="col">
                <a href="/register"> Crea cuenta </a> 
              </div>
                        
            </div>
          </div>
          
        <h1>LOGIN</h1>

 

        
        @include('layouts.partials.messages')
        <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <div id="exampleInputPassword1" class="form-text"> Sus datos personales no serán compartidos </div>
        </div>
        
        <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            
        </div>        
        
    </form>
</div>        

@endsection

