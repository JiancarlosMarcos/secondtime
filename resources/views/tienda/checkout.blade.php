@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')
    <div class="container mb-12">
        <div class="grid gap-6 grid-cols-12 my-4 py-2">
            <div class="col-span-8 bg-gray-50 rounded-lg shadow-md">
              <div class="container p-8">
                <form class="" action="#" method="POST">
                  <div class="mb-2">
                    <label for="nombre" class="text-gray-600">Nombre</label>
                    <input name="nombre" type="text" required class="relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">                                        
                  </div>
                  <div class="mb-2">
                    <label class="text-gray-600">Apellidos</label>
                    <input name="apellidopaterno" type="text" required class="relative block px-3 mb-2 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Apellido Paterno">
                    <input name="apellidomaterno" type="text" required class="relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Apellido Materno">
                  </div>
                  <div class="mb-2">
                    <label for="telefono" class="text-gray-600">Whatsapp</label>
                    <input name="telefono" type="tel" required class="relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="999999999">                                        
                  </div>
                  <div class="mb-2">
                    <label for="direccion" class="text-gray-600">Dirección</label>
                    <input name="direccion" type="text" required class="max-w-sm relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="direccion">                                        
                  </div>
                  <div class="mb-2">
                    <label for="descripcion" class="text-gray-600">Descripcion</label>
                    <textarea name="descripcion" class="max-w-sm relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  w-full rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Descripcion"></textarea>                            
                  </div>
                </form>
              </div>
            </div>
            <div class="col-span-4">
                <div class="grid grid-rows-2 gap-4">
                  <div class="col-span-1 border-2 p-8 bg-gray-50 rounded-lg shadow-md">
                    <div class="mb-4">
                      <img class="" src="{{ $producto->imagen }}">
                    </div>
                    <h3 class="text-red-700 text-xl">
                      Producto: 
                      <span class= "text-xl text-gray-700">{{ $producto->nombre }}</span>
                      
                    </h3>
                    <h3 class="text-red-700 text-xl">
                      Precio:
                      <span class="text-xl text-gray-700">s/ {{ $producto->preciofinal }}</span>
                    </h3>
                  </div>
                  <div class="col-span-1 border-2 p-8 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl text-center mb-4">Metodos de Pago</h3>
                    <a href="#" class="border-2 my-4 p-2 text-center rounded-md block bg-purple-600">Yape</a>
                    <a href="#" class="border-2 my-4 p-2 text-center rounded-md block bg-blue-500">Plin</a>
                    <a href="#" class="border-2 my-4 p-2 text-center rounded-md block bg-blue-300">Agora</a>
                  </div>
                </div>
            </div>
        </div>


    </div>
@endsection