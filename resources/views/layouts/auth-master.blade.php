<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Login</title>
    
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <style>
        .form-container {
         
          }
    
        
    </style>

</head>
<body>
  

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    
                    {{--  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />  --}}
                     <img src="/img/Lawyer.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" /> 
    
                    </div>
    
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">


    

                            <main class="form-container">
                            
                                @yield('content')
                        
                            </main>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>    
</body>
</html>