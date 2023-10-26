<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Login</title>
    
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
    @include('layouts.partials.navbar')
    <main class="container">
        @yield('content')
    </main>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>    
</body>
</html>