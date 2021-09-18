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
<body class="antialiased text-gray-600">
    
<div class="absolute w-full min-h-screen">
    <div class="absolute top-0 w-full h-1/2 bg-cover bg-bottom" 
         style="background-image: url('img/background.jpg')">
    </div>
</div>


@yield('content')


<section class="pt-20 pb-36 px-8 bg-gray-50">
  <div class="max-w-6xl mx-auto">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-800">Contactame</h1>
        <p class="pt-2">Get in touch with me</p>
    </div>
  </div>
  <div class="mt-16 relative max-w-4xl mx-auto">
    <div
        class="absolute z-10 inset-0 bg-gradient-to-r from-cyan-400 to-emerald-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"
    ></div>
    <div class="relative z-20 bg-white rounded-md shadow-md p-12">
        <form action="">
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6"
            >
                <input
                    type="text"
                    placeholder="Name"
                    class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400"
                />
                <input
                    type="text"
                    placeholder="Email"
                    class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400"
                />
                <input
                    type="text"
                    placeholder="Subject"
                    class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                />
                <textarea
                    rows="5"
                    placeholder="Message"
                    class="border border-gray-200 outline-none px-4 py-2 rounded-md hover:border-gray-400 focus:border-gray-400 md:col-span-2"
                ></textarea>
            </div>
            <button
                class="inline-block w-auto mt-4 px-6 py-2 bg-gradient-to-r from-cyan-400 to-emerald-400 rounded-md shadow-md text-sm font-bold text-white"
            >
                Send Message
            </button>
        </form>
    </div>
  </div>
</section>

</body>
</html>




