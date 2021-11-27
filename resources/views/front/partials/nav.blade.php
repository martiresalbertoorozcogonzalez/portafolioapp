<nav class="bg-gray-800 py-6  w-full">
 <div class="container mx-auto flex px-8 lg:px-0">

     <div class="flex flex-grow items-center">
           <img src="{{ asset('img/professional.png') }}" style="width:30px; height:30px;" alt="Logo">
           
     </div>

     <div class="flex lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" onclick="openMenu();">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
         </svg>    
     </div>
     
      <div id="menu" class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-20 left-0 bg-gray-800 w-full lg:w-auto items-center py-14 lg:py-0 px-8 sm:px-24 lg:px-0">
        <div class="flex flex-col lg:flex-row mb-8 lg:mb-0">
            <a href="#inicio" class="text-white lg:mr-7 mb-8 lg:mb-0">Inicio</a>
            <a href="#certificaciones" class="text-white lg:mr-7 mb-8 lg:mb-0">Certificaciones</a>
            <a href="#portafolio" class="text-white lg:mr-7 mb-8 lg:mb-0">Portafolio</a>
            <a href="#contacto" class="text-white">Contacto</a>
        </div>
        <div class="flex flex-col lg:flex-row text-center">
            <a href="{{ url('login') }}" class="boton-iniciar-secion lg:mr-4 mb-8 lg:mb-0">Iniciar secion</a>
            <a href="{{ url('register') }}" class="boton-registrate">Registrate</a>
        </div>
     </div>
    
 </div>
</nav>

<script>
    function openMenu() {
        
        let menu = document.getElementById('menu');

        if(menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        }else{
            menu.classList.add('hidden');
        }
    }
</script>