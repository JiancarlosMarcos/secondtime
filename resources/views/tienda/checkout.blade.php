@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')
<div class="py-10">
    <div class="container">
        <div class="grid gap-4 grid-cols-12">
            <div class="col-span-8 border">
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
                                        <label for="telefono" class="text-gray-600">Whatsapp</label>
                                        <input name="telefono" type="tel" required class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="999999999">                                        
                                      </div>
                                      <div class="mb-4">
                                        <label for="direccion" class="text-gray-600">Dirección</label>
                                        <input name="direccion" type="text" required class="max-full appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="direccion">                                        
                                      </div>
                                      <div class="mb-4">
                                        <label for="descripcion" class="text-gray-600">Descripcion</label>
                                        <textarea name="descripcion" class="max-w-sm appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  w-full rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Descripcion"></textarea>                            
                                      </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>                
            </div>
            <div class="col-span-4 border">
                info del producto
            </div>
        </div>
    </div>
</div>
@endsection