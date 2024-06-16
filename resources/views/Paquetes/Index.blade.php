<x-app-layout>
    <div class="relative h-screen">
        <!-- Contenedor de la imagen -->
        <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" width="100%" height="100%">
        
        <!-- Contenido superpuesto -->
        <div class="sm:absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <div class="text-sm">Buscar tour</div>
            <div class="text-4xl font-bold">Viaja con nosotros</div>
        </div>
        
        <!-- Contenedor de la barra de tareas -->
        <div class="absolute bottom-0 w-full bg-gray-800 text-white text-center py-2">
            <div class="flex justify-center space-x-4">
                <button class="px-4">Fecha</button>
                <button class="px-4">Precio Mayor</button>
                <button class="px-4">Precio Menor</button>
                <button class="px-4">Nombre (A-Z)</button>
            </div>
        </div>
    </div>
</x-app-layout>