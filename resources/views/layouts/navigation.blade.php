<nav class="bg-black bg-opacity-50 fixed top-0 left-0 right-0 z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img class="h-16 w-auto" src="{{ asset('images/icono5.ico') }}" alt="TravelGo">
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                <a href="#" class="text-gray-300 hover:text-white">Principal</a>
                <a href="#" class="text-gray-300 hover:text-white">Acerca</a>
                <a href="#" class="text-gray-300 hover:text-white">Servicios</a>
                <div class="relative group">
                    <button class="text-gray-300 hover:text-white">Paquetes</button>
                    <div class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-lg">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Paquete de Luna de Miel</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Paquete Familiares</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Eventos musicales</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Paquetes</a>
                    </div>
                </div>
            </div>
            <!-- Authentication Links -->
            @if (Route::has('login'))
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-300 hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-gray-300 hover:text-white">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>