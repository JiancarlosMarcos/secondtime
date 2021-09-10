@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')

<div class="container">
    <div class="grid gap-3 clmn-12 my-4 py-2">
        <div class="span-8">
            <img class="p-4" src="{{ $producto->imagen }}">
        </div>
        <div class="span-4 b p-4">
            <div class="contianer">
                <span class="display-4">{{ $producto->nombre }}</span>
                <div>
                    <span>{{ $producto->descripcion }}</span>
                </div>
                <div class="py-4 my-2">
                    <span class="text-muted"><s>s/{{$producto->precioinicial}}</s></span>
                    <h5 class="text-danger" style="font-size: 2em;">s/{{$producto->preciofinal}}</h5>
                </div>
                <div>
                    <a href="#" class="my-btn btn btn-outline-warning mt-3 form-control active">Comprar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection