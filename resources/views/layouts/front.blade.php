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

        
    </head>
<body class="antialiased text-gray-600">
    
<div class="absolute w-full min-h-screen">
    <div class="absolute top-0 w-full h-1/2 bg-cover bg-bottom" 
         style="background-image: url('img/background.jpg')">
    </div>
</div>

<section class="flex justify-center items-center min-h-screen">
    <div class="relative">
        <div class="bg-card"></div>
        
        <div class="relative md:flex space-x-12 z-10 bg-white max-w-4xl p-12 rounded-md shadow-md">
            <div class="flex flex-col space-y-6 justify-between py-4">
                
                <div>
                    <p class="text-lg">Hola yo soy</p>
                    <h1 class="text-xl font-bold text-gray-800">Martires Alberto</h1>
                </div>
                <p class="text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Voluptatibus in et repudiandae.
                </p>
                <div class="inline-flex spacex4 text-xl">
                <ion-icon name="logo-github"></ion-icon>
                <ion-icon name="logo-linkedin"></ion-icon>
                </div>

            </div>
            <img src="img/me.jpg" alt="" 
            class="w-80 rounded-full border-6 border-white shadow-md flex-shrink-0">
        </div>
    </div>
</section>

<section class="bg-gray-50 pt-20 pb-20 px-8">
   <div class="max-w-5xl mx-auto">
       <div class="text-center">
         <h2 class="text-6xl text-gray-800 font-bold">Servicios</h2>
         <p class="pt-2">Lorem ipsum dolor sit amet consectetur.</p>
       </div> 
    </div>
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16">
      <div class="relative">
        <div class="bg-card"></div>     
        <div class="relative bg-white p-12 rounded-md shadow-md">
         <ion-icon name="phone-portrait" class="text-5xl text-cyan-500"></ion-icon>
         <h3 class="mt-3 text-2xl font-bold">Diseño responsivo</h3>
         <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, tenetur numquam!</p>
        </div>
      </div>

      <div class="relative">
        <div class="bg-card"></div>     
        <div class="relative bg-white p-12 rounded-md shadow-md">
         <ion-icon name="logo-buffer" class="text-5xl text-cyan-500"></ion-icon>
         <h3 class="mt-3 text-2xl font-bold">Web Apps</h3>
         <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, tenetur numquam!</p>
        </div>
      </div>
      
      <div class="relative">
        <div class="bg-card"></div>     
        <div class="relative bg-white p-12 rounded-md shadow-md">
         <ion-icon name="chatboxes" class="text-5xl text-cyan-500"></ion-icon>
         <h3 class="mt-3 text-2xl font-bold">Consultoria</h3>
         <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, tenetur numquam!</p>
        </div>
      </div>
      
      
    </div>
</section>  

<section class="pt-20 pb-20 px-8 min-h-screen">
   <div class="max-w-5xl mx-auto">
       <div class="text-center">
         <h2 class="text-6xl text-gray-800 font-bold">Portafolio</h2>
         <p class="pt-2">Lorem ipsum dolor sit amet consectetur.</p>
       </div>
       <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
         <div class="rounded-md shadow-md lg:col-span-2">
           <img src="img/work1.jpg" class="h-50 w-full object-cover" alt="">
           <div class="p-8">
             <h4 class="font-bold text-2xl">Portafolio titulo</h4>
             <p class="pt-3">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aliquam.
             </p>
             <a href="#" class="inline-block mt-4 bg-gradient-to-r from-cyan-400 to-emerald-400 font-bold text-white text-sm px-6 py-2 rounded-md shadow-md">
               Ver mas
             </a>
           </div>
         </div>

         <div class="rounded-md shadow-md">
           <img src="img/work2.jpg" class="h-50 w-full object-cover" alt="">
           <div class="p-8">
             <h4 class="font-bold text-2xl">Portafolio titulo</h4>
             <p class="pt-3">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aliquam.
             </p>
             <a href="#" class="inline-block mt-4 bg-gradient-to-r from-cyan-400 to-emerald-400 font-bold text-white text-sm px-6 py-2 rounded-md shadow-md">
               Ver mas
             </a>
           </div>
         </div>

         <div class="rounded-md shadow-md">
           <img src="img/work3.jpg" class="h-50 w-full object-cover" alt="">
           <div class="p-8">
             <h4 class="font-bold text-2xl">Portafolio titulo</h4>
             <p class="pt-3">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aliquam.
             </p>
             <a href="#" class="inline-block mt-4 bg-gradient-to-r from-cyan-400 to-emerald-400 font-bold text-white text-sm px-6 py-2 rounded-md shadow-md">
               Ver mas
             </a>
           </div>
         </div>

         <div class="rounded-md shadow-md lg:col-span-2">
           <img src="img/work4.jpg" class="h-50 w-full object-cover" alt="">
           <div class="p-8">
             <h4 class="font-bold text-2xl">Portafolio titulo</h4>
             <p class="pt-3">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aliquam.
             </p>
             <a href="#" class="inline-block mt-4 bg-gradient-to-r from-cyan-400 to-emerald-400 font-bold text-white text-sm px-6 py-2 rounded-md shadow-md">
               Ver mas
             </a>
           </div>
         </div>

       </div> 
    </div>
</section> 

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




