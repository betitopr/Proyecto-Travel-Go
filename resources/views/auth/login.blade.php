<x-guest-layout>
<div class="flex justify-center items-center h-screen min-h-screen">
    <div class="w-1/2 bg-white bg-opacity-80 shadow-md overflow-hidden sm:rounded-[30px]" style="height:60%; min-height: 60vh;">
        <div class="flex items-center justify-between h-full">         
                <!-- Formulario -->
                <form method="POST" action="{{ route('login') }}" class="w-4/5">
                    @csrf

                    <h1 class="text-7xl font-bold text-center mb-4" style="font-family: 'Carattere', serif; margin-bottom: 20px; width: 50%; margin-left: auto; margin-right: auto;">
                        Travel GO</h1>

                    <!-- Email Address -->
                    <div class="ml-20">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="border-indigo-900 block mt-1 w-2/3 sm:rounded-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 ml-20">
                        <x-input-label for="password" :value="__('Contraseña')" />
                        <x-text-input id="password" class="border-indigo-900 block mt-1  w-2/3 sm:rounded-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 ml-20">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-500 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div class="flex-grow text-center">
                            <x-primary-button class="ms-3 sm:rounded-full bg-orange-500 hover:bg-orange-700">
                                {{ __('Inicia Sesión') }}
                            </x-primary-button>
                        </div>
                    </div>

                    <a class="underline text-sm text-orange-500 ml-20 hover:text-orange-700 rounded-md focus:outline-none focus:left-2 focus:left-offset-2 focus:left-orange-500" href="{{ route('register') }}">
                        {{ __('¿Todavía no te registras?') }}
                    </a>
                </form>

                <!-- Imagen -->
                <div class="mr-5">
                    <img src="{{ asset('images/viaje-removebg-preview.png') }}" alt="Fondo de pantalla" class="w-7/8 h-7/8 object-cover ">
                </div>

                
            </div>

            <!-- Olvidaste tu contraseña -->
            <div class="self-center mt-auto mb-5 text-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-orange-500 hover:text-orange-700 rounded-md focus:outline-none focus:left-2 focus:left-offset-2 focus:left-orange-500" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>     
        </div>
    </div>
</div>
</x-guest-layout>