@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')
    <div>
        <div class="container py-5">
            <div class="grid gap-4 grid-cols-12 p-2 md:p-5">
                <div class="hidden lg:block lg:col-span-3">
                    <div class="">
                        <h3 class="p-2 text-2xl font-medium text-gray-700">Categorias</h3>
                        <div class="grid grid-cols-1 mb-4">
                            <a href="" class="border-b text-sm text-gray-700 font-normal p-2">Moda</a>
                            <a href="" class="border-b text-sm text-gray-700 font-normal p-2 ">Electrónica</a>
                            <a href="" class="border-b text-sm text-gray-700 font-normal p-2 ">Muebles para el Hogar</a>
                        </div>
                    </div>
                </div>            
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-9 pb-10">                    
                    <div class="grid gap-1 grid-cols-2 sm:grid-cols-2 md:grid-cols-3">                      
                        @foreach ($products as $product)
                            <x-card-product
                                :id='$product->id'
                                :imagen="$product->imagen"
                                :nombre="$product->nombre"
                                :descripcion="$product->descripcion"
                                :precioinicial="$product->precioinicial"
                                :preciofinal="$product->preciofinal"
                            />
                        @endforeach
                    </div>
                    <div class="py-6">
                        {{ $products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection