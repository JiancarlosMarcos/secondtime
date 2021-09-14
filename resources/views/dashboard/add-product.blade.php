<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl">
                <div class="py-10 flex bg-gray-50 px-4 sm:px-6 lg:px-8">
                    <div class="w-full">
                      <form class="space-y-6" action="#" method="POST">
                        <div class="rounded-md shadow-sm -space-y-px">
                          <div class="mb-4">
                            <label for="nombre" class="text-gray-600">Nombre</label>
                            <input name="nombre" type="email" required class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">
                          </div>
                          <div class="mb-4">
                            <label for="descripcion" class="text-gray-600">Descripcion</label>
                            <textarea name="descripcion" class="max-w-sm appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  w-full rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Descripcion"></textarea>                            
                          </div>
                          <div class="mb-4">
                            <label for="precioinicial" class="text-gray-600">Precio sin oferta</label>
                            <input type="number" name="precioinicial" class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">                            
                          </div>
                          <div class="mb-4">
                            <label for="preciofinal" class="text-gray-600">Precio con oferta</label>
                            <input type="number" name="preciofinal" class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">                            
                          </div>
                          <div class="mb-4">
                            <label for="imagen" class="text-gray-600">Imagen</label>
                            <input type="file" name="imagen"class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">                     
                          </div>
                        </div>
                        <div>
                          <button type="submit" class="group relative w-40 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                           Guardar
                          </button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>