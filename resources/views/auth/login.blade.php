@extends('layouts.auth-master')
@section('content')

  
                  <form action="/login" method="post" >
                      @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Login</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicie sesión en su cuenta</h5>
 
                    <div class="form-outline mb-4">
                      <input type="text" name="username"  id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Usuario / Email </label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" name="password"  id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
                    
                    
                    <div class="d-grid gap-2 col-6 mb-4 mx-auto">
                    {{--  <div class="pt-1 mb-4">  --}}
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Ingresar</button>
                    </div>
  
                    {{--  <a class="small text-muted" href="#!">Forgot password?</a>  --}}
                    <p class="mt-5 mb-1 pb-lg-2" style="color: #393f81;">No tiene cuenta? <a href="/register"
                        style="color: #393f81;">Registrese aquí</a></p>
                    {{--  <a href="#!" class="small text-muted">Terms of use.</a>  --}}
                    {{--  <a href="#!" class="small text-muted">Privacy policy</a>  --}}
                  </form>
  
 
  @endsection