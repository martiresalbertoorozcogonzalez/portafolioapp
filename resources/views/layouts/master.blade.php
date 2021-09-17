<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
<body>

    <div class="w-1900 xsm:w-full mx-auto">
        
        <nav class="bg-gray-800 flex justify-between lg:justify-start items-center">
            <div class="logo p-2 w-1/6">
                <img src="img/star.png" width="50" alt="">
            </div>
            <div class="links lg:block hidden w-1/6 md:w-4/6">
                <ul class="menu flex items-center justify-center gap-5">
                    <li><a href="http://" class="link">Home</a></li>
                    <li><a href="http://" class="link">Play Toqgueder</a></li>
                    <li><a href="http://" class="link">Explore</a></li>
                    <li><a href="http://" class="border-4 border-yellow-400 text-white font-bold p-2 rounded-full hover:bg-white hover:text-black transition duration-500">Bower</a></li>
                    <li><a href="http://" class="rounded-full bg-red-500 text-white font-bold px-4 py-3 hover:text-black hover:bg-white duration-500">Buy Now</a></li>
                </ul>
            </div>
            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu">Menu</a>
                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-gray-800">
                    <li><a href="http://" class="link">Home</a></li>
                    <li><a href="http://" class="link">Play Toqgueder</a></li>
                    <li><a href="http://" class="link">Explore</a></li>
                    <li><a href="http://" class="my-4 inline-block border-4 border-yellow-400 text-white font-bold p-2 rounded-full hover:bg-white hover:text-black transition duration-500">Bower</a></li>
                    <li><a href="http://" class="my-4 inline-block rounded-full bg-red-500 text-white font-bold px-4 py-3 hover:text-black hover:bg-white duration-500">Buy Now</a></li>
                </ul>
            </div>
        </nav>

        <section class="header">
            <img src="img/portafolio2.jpg" alt="">
        </section>

        <section>
            <div class="bg-wave-pattern h-6 bg-repeat-x relative -top-2"></div>
            <div class="bg-wave-pattern-dots text-center p-4 flex md:flex-row flex-col gap-3 justify-center">
                <a href="#" class="inline-block py-3 px-16 bg-black text-white font-bold border-transparent border-8 text-2xl rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200">Buy Now</a>
                <a href="#" class="inline-block py-3 px-16 bg-red-500 text-white font-bold border-transparent border-8 text-2xl rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200">Watch the Trailer</a>
             </div>
             <div class="bg-wave-pattern bg-repeat-x h-6 relative top-2"></div>
        </section>

        <section class="bg-wave-characters-red py-28">
            <div class="lg:container mx-auto md:flex gap-5 md:w-full p-3">

                <div class="left bg-character-mario bg-no-repeat bg-contain bg-top w-5/6 md:w-1/2 pt-52 mx-auto">
                            

                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-72 rounded-2xl overflow-hidden xl:w-4/5">
                       <div class="cover bg-black">
                           <video src="videos/video01.mp4" autoplay loop muted></video>
                       </div>
                       <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                           <h3 class="font-black text-4xl py-10">Play Together</h3>
                           <p class="text-xl">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, voluptatem.
                           </p>
                           <a href="#" class="boton">
                               Watch the trailer
                               <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-4 border-r-4 transition-all transform rotate-45 group-hover:border-red-500 xl:group-hover:ml-4"></span>
                           </a> 
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>

                </div>

                <div class="right w-5/6 md:w-1/2 text-center mx-auto">
                  <h2 class="font-blac text-white text-6xl py-8">Available Now</h2>
                   <p class="font-bold text-white text-2xl mx-auto py-10 w-4/5">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                   </p>
                   <p class="text-white mx-auto w-4/5">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   </p>


                   <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-16 rounded-2xl overflow-hidden xl:w-4/5">
                       <div class="cover bg-black">
                           <video src="videos/video02.mp4" autoplay loop muted></video>
                       </div>
                       <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                           <h3 class="font-black text-4xl py-10">Play Together</h3>
                           <p class="text-xl">
                               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, voluptatem.
                           </p>
                           <a href="#" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-red-500 text-white font-black border-transparent border-8 rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200 group">
                               Watch the trailer
                               <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-4 border-r-4 transition-all transform rotate-45 group-hover:border-red-500 xl:group-hover:ml-4"></span>
                           </a> 
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="footer text-center flex justify-center gap-9 pt-10">
                <img src="img/coin.gif" alt="coin" class="w-20 h-20 sm:w-20 sm:h-20">
                <img src="img/coin.gif" alt="coin" class="w-20 h-20 sm:w-20 sm:h-20">
                <img src="img/coin.gif" alt="coin" class="w-20 h-20 sm:w-20 sm:h-20">
                <img src="img/coin.gif" alt="coin" class="w-20 h-20 sm:w-20 sm:h-20 hidden sm:block">
                <img src="img/coin.gif" alt="coin" class="w-20 h-20 sm:w-20 sm:h-20 hidden sm:block">
                <img src="img/coin.gif" alt="coin" class="w-20 h-20 sm:w-20 sm:h-20 hidden sm:block">
             </div>
        </section>

        <section class="bg-yellow-dots">
            <div class="bg-wave-pink bg-repeat-x h-6 relative -top-4"></div>
            <div class="xsm:w-full sm:container w-2/3 mx:auto md:flex justify-center items-center text-center py-6">
             <div class="left xl:w-1/3 lg:w-1/2 p-5">
               <h3 class="text-yellow-900 font-black xsm:text-3xl sm:text-4xl">
                   Cat <br> Transformation <br> Center
               </h3>
               <p class="py-4 text-xl">
                   We´re not kitten-transform into aq car-tastic new you!
               </p>
               <p>
                   <a href="#" class="boton group">
                       Meow! <span class="arrow arrow-group"></span>
                   </a>
               </p>
            </div>
             <div class="right xl:w-2/3 lg:w-1/2">
                <img src="img/activity_img3.png" class="md:w-full" alt="">
             </div>
            </div>
        </section>

        <section class="bg-black">
            <div class="bg-wave-pattern bg-repeat-x h-6 relative -top-4"></div>
            <div class="container mx-auto text-center py-10 w-2/3">
                <div class="pb-5">
                    <a href="#" class="boton group">
                        Customer Support
                        <span class="arrow arrow-group"></span>
                    </a>
                </div>

                <div class="text-white">
                    <p class="py-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    
                </div>
            </div>
        </section>

    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> 

    <!-- Script pora utilizar el menu hamburguesa -->
    <script>
        const menuBotton = document.querySelector('#mobile-menu');

        menuBotton.addEventListener('click', e => {
            const menu = document.querySelector('.mobile-links');
            menu.classList.toggle('hidden');
        });
    </script>      
   
</body>
</html>
