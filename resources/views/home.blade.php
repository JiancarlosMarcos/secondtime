@extends('layouts.plantilla')
@section('titlePage','home')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('media/4.jpg'); }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('media/5.jpg'); }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('media/6.jpg'); }}" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid">
    <div class="container py-5">
        <div class="my-tienda grid clmn-12">
            <div class="span-12 p-1 span-md-12 span-sm-12 span-pk-12">
                <div class="grid gap-1 clmn-4 clmn-md-2 clmn-sm-2 clmn-pk-1">
                    @foreach ($products as $product)
                    <div class="card m-1">
                        <div class="card-img ">
                            <a href="{{ route('tienda.show',$id=$product->id) }}">
                                <img class="" src="{{$product->imagen}}">
                            </a>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                          <h3 class="card-title">{{$product->nombre}}</h3>
                          <p class="card-subtitle text-muted">
                            {{$product->descripcion}}
                          </p>
                          <div class="buy d-flex flex-row justify-content-between align-items-center">
                            <div class="price text-success">
                                <span class="text-muted" style="font-size: 11px; text"><s>s/{{$product->precioinicial}}</s></span>
                                <h5 class="">s/{{$product->preciofinal}}</h5>
                            </div>
                            <a href="#" class="my-btn btn btn-outline-warning mt-3">Comprar</a>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection