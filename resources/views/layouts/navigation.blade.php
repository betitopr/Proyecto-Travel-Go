@inject('ipGeolocationService', 'App\Services\IpGeolocationService')

@php
    $location = $ipGeolocationService->getLocation();
    $countryFlag = $location['country_flag'] ?? '';
@endphp
<nav class="bg-black bg-opacity-50 fixed top-0 left-0 right-0 z-10">
    <div class="max-w-7/8 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img class="h-16 w-auto" src="{{ asset('images/icono5.ico') }}" alt="TravelGo">
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-20 sm:flex items-center justify-center flex-grow">
                <a href="#" class="text-gray-300 hover:text-white">Principal</a>
                <a href="#" class="text-gray-300 hover:text-white">Acerca</a>
                <a href="#" class="text-gray-300 hover:text-white">Servicios</a>
                <a href="{{ url('/dashboard') }}" class="text-gray-300 hover:text-white sm:mr-10">Dashboard</a>
                <div class="relative group">
                    <button class="text-gray-300 hover:text-white">Paquetes</button>
                    <div class="absolute hidden group-hover:block bg-white text-black rounded shadow-lg z-50">
                        <ul>
                            <li><a href="#" class="block px-8 py-2 hover:bg-gray-200 w-50 h-16">Paquete Turisticos</a></li>
                            <li><a href="#" class="block px-8 py-2 hover:bg-gray-200 w-50 h-16">Paquete Familiares</a></li>
                            <li><a href="#" class="block px-8 py-2 hover:bg-gray-200 w-50 h-16">Eventos Globales</a></li>
                            <li><a href="{{ url('/paquetes') }}" class="block px-8 py-2 hover:bg-gray-200 w-50 h-16">Paquetes</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Authentication Links -->
            @if (Route::has('login'))x
                <div class="hidden sm:flex sm:items-center  ">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 hover:text-white bg-transparent focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <div class="ml-4 flex items-center">
                                @if ($countryFlag)
                                    <img src="{{ $countryFlag }}" alt="Country Flag" class="h-4 w-6 mr-2">
                                @endif
                            <a href="{{ route('register') }}" class="text-gray-300 hover:text-white">Registrarse</a>
                         </div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>