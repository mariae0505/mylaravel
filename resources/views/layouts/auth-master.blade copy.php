<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Login</title>
    
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <style>
        body {
          width: 100%;
          height: 100vh;

          display: flex;
          align-items: center;
          justify-content: center;
        }
        .form-container {
            width: 400px;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;
          }
    
          
        
    </style>

</head>
<body>
   
    <main class="form-container">
       
        @yield('content')
   
    </main>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>    
</body>
</html>