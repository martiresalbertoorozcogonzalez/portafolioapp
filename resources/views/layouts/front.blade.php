<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Ionic icons -->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

     
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('estilos')
        
    </head>
<body class="antialiased text-orange-600">
    
<div class="absolute w-full min-h-screen">
    <div class="absolute top-0 w-full h-1/2 bg-cover bg-bottom" 
         style="background-image: url('img/background.jpg')">
    </div>
</div>


@yield('content')


</body>
</html>




