<x-app-layout>
    <div class="relative h-screen">
        <!-- Contenedor del video -->
        <div class="relative w-full h-4/5">
            <video muted autoplay width="100%" height="100%" controls>
                <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 z-10">No importa a dónde vayas, te llevaremos allí.</h1>
                <form action="" method="POST">
                    <div class="bg-white bg-opacity-40 rounded-lg p-6 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 z-10">
                        <input type="text" placeholder="¿A dónde?" class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                        <select class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                            <option>Tipo de viaje</option>
                        </select>
                        <input type="text" placeholder="Duración" class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                        <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Información adicional debajo de la imagen -->
        <div class="flex justify-center items-center mt-4">
            <span class="text-white">2,350 personas reservaron el evento formacional en las últimas 24 horas</span>
        </div>
    </div>
</x-app-layout>

