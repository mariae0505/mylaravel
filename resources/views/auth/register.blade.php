@extends('layouts.auth-master')

@section('content')


<form action="/register" method="post" >
        @csrf

        <div class="d-flex align-items-center mb-3 pb-1">
            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
            <span class="h1 fw-bold mb-0">Registro</span>
          </div>

        @include('layouts.partials.messages')

        

            <div class="form-outline mb-2">
                <input type="text" name="username"  id="username" class="form-control form-control-sm" />
                <label class="form-label" for="username">Username / Email address</label>
              </div>

            {{--  <div id="emailHelp" class="form-text"> Nunca compartiremos sus datos personales. </div>  --}}
                <div class="form-outline mb-2">
                    <input type="text" name="name"  id="name" class="form-control  form-control-sm" />
                    <label class="form-label" for="name">Nombre</label>
                </div>
        
                <div class="form-outline mb-2">
                    <input type="email" name="email"  id="email" class="form-control form-control-sm" />
                    <label class="form-label" for="email">Email</label>
                </div>  
                <div class="form-outline mb-2">
                    <input type="password" name="password"  id="password" class="form-control form-control-sm" />
                    <label class="form-label" for="password">Password</label>
                </div>
                <div class="form-outline mb-2">
                    <input type="password" name="password_confirmation"   id="password_confirmation" class="form-control form-control-sm" />
                    <label class="form-label" for="password_confirmation">Confirmar Password</label>
                </div>      

               
                

        {{--  <div class="mb-3">
            <a href="/login"> Login </a>
        </div>            --}}
        
        {{--  <div class="pt-1 mb-4">  --}}
        <div class="d-grid gap-2 col-6 mb-4 mt-4 mx-auto">    
            <button class="btn btn-dark btn-lg btn-block" type="submit">Registrarme</button>
        </div>
        <p class="mb-0 pb-lg-2" style="color: #393f81;">Ya tiene cuenta?  <a href="/login""
            style="color: #393f81;">Ingrese aquí </a></p>

        {{--  <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary ">Registrar</button>
            
          </div>  --}}
       


    </form>



@endsection




