@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')
    <div class="container mb-12">
        <div class="grid gap-3 grid-cols-12 my-4 py-2">
            <div class="col-span-8">
                <img class="m-4" src="{{ $producto->imagen }}">
            </div>
            <div class="col-span-4 border bg-gray-50 rounded-lg my-4 shadow-md">
                <div class="p-4">
                    <div class="mb-4">
                        <h3 class="text-3xl mb-10">{{ $producto->nombre }}</h3>
                        <span class="text-gray-500">{{ $producto->descripcion }}</span>
                        <div class="py-2 mb-2 mt-10">
                            <span class="text-gray-600"><s>s/{{$producto->precioinicial}}</s></span>
                            <h5 class="text-red-700 text-3xl">s/{{$producto->preciofinal}}</h5>
                        </div>
                    </div>
                    <div class="">
                        <a href="{{ route('checkout.show',$id= $producto->id) }}" class="flex justify-center rounded-lg border bg-yellow-400 mt-3 p-2">Comprar</a>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@endsection