@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')
<div class="container">
    <div class="grid gap-3 grid-cols-12 my-4 py-2">
        <div class="col-span-8">
            <img class="p-4" src="{{ $producto->imagen }}">
        </div>
        <div class="col-span-4 border p-4">
            <div class="container">
                <span class="text-lg">{{ $producto->nombre }}</span>
                <div>
                    <span class="text-gray-500">{{ $producto->descripcion }}</span>
                </div>
                <div class="py-4 my-2">
                    <span class="text-gray-600"><s>s/{{$producto->precioinicial}}</s></span>
                    <h5 class="text-red-700 text-3xl">s/{{$producto->preciofinal}}</h5>
                </div>
                <div >
                    <a href="{{ route('checkout')}}" class="flex justify-center rounded-lg border bg-yellow-400 mt-3 p-2">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection