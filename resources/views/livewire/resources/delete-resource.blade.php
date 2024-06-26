<div>
    <div class="relative bg-white rounded-lg max-w-md p-6">
        <div class="flex justify-between items-center border-b border-gray-200 pb-4 mb-4">
            <h2 class="text-lg font-semibold">Borrar el recurso con el nombre: {{ $resource->title }}</h2>  
        </div>
        <div class="mb-6">
            <p class="text-gray-700">Estas seguro de querer borrar el recurso?</p>
        </div>
        <div class="flex justify-end">
            <button wire:click="deleteResource" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mr-2">Confirmar</button>
            <button wire:click="closeModal" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancelar</button>
        </div>
    </div>
</div>
