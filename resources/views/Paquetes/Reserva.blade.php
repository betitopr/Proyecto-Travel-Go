<x-app-layout>
    <div class="relative h-screen">
        <!-- Contenedor de la imagen -->
        <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" width="100%" height="100%">
        
        <!-- Contenido superpuesto -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <div class="text-sm font-bold" >Explorar</div>
            <div class="text-8xl font-bold" style="font-family: 'Carattere'">Paisaje</div>
        </div>
        
        <!-- Contenedor de cuerpo -->
        <div class="w-2/3 mx-auto mt-[-50px] mb-10" >
            <!-- Barra de tareas -->
            <div class="flex justify-center h-[50px] w-full">
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Informacion</button>
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Plan de viaje</button>
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Ubicación</button>
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Galería</button>
            </div>

        <!--Cuerpo-->
        <div class="flex justify-center bg-gray-100 space-x-[10px] w-full">    
            <!--Catalogo de viajes-->

            <!--Buscador-->
            <div class="flex flex-wrap justify-center space-x-[10px] w-[40%]">
                <div class="flex flex-col items-center h-[500px] w-[80%] bg-white mt-5">
                    <!-- Aquí es donde irá el buscador -->
                    <div class="w-[95%] p-4 ">
                        <h2 class="text-2xl font-bold mb-2">Planifica tu viaje</h2>
                        <p class="mb-4">¡Planifíca tu aventura! Encuentra vuelos, reserva, alojamiento y descubre actividades emocionantes. ¡Haz realidad tus sueños de viajar con nosotros!</p>
                        <form >
                            <input type="text" class="w-full p-2 border border-gray-300 sm:rounded-lg mb-2" placeholder="Buscar tour">
                            <input type="text" class="w-full p-2 border border-gray-300 sm:rounded-lg mb-2" placeholder="¿A donde?">
                            <input type="date" class="w-full p-2 border border-gray-300 sm:rounded-lg mb-2">
                        <div class="relative mt-2">
                            <label for="priceRange" class="text-2xl font-bold">Filtrar Precio</label>
                            <input type="range" min="12" max="3600" id="priceRange" class="slider w-full p-2 border border-gray-300 rounded mt-5 mb-2" oninput="updatePriceValue(this.value)">
                            <span class="absolute top-4 right-0 mt-15 text-sm" id="priceValue">Precio: $12 - $3600</span>
                        </div>
                            <script> 
                            function updatePriceValue(val) {
                                document.getElementById('priceValue').textContent = 'Precio: $' + val;
                            }
                            </script>

                            <div class="flex items-center justify-center mt-10 h-full">
                                <button class="w-[50%] p-2 bg-orange-500  hover:bg-gray-500 text-white rounded">Reservar ahora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>