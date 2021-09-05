@extends('layouts.plantilla')
@section('titlePage','tienda')
@section('content')




    <div class="container-fluid">
        <div class="container py-5">
            <div class="my-tienda grid clmn-12">
                <div class="tienda-categ p-3 span-2 span-md-2 span-sm-0 span-pk-0">
                    <h3 class="h4">Categorias</h3>
                    <div class="grid clmn-1 mb-4">
                        <a href="" class="text-decoration-none py-2  b-bottom">Ofertas</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Mas vendidos</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Para ti</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Otros</a>
                    </div>
                    <h3 class="h4">Ofertas</h3>
                    <div class="grid clmn-1 mb-4">
                        <a href="" class="text-decoration-none py-2  b-bottom">Ofertas</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Mas vendidos</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Para ti</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Otros</a>
                    </div>
                    <h3 class="h4">Mas vendidos</h3>
                    <div class="grid clmn-1 mb-4">
                        <a href="" class="text-decoration-none py-2  b-bottom">Ofertas</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Mas vendidos</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Para ti</a>
                        <a href="" class="text-decoration-none py-2  b-bottom">Otros</a>
                    </div>
                </div>            
                <div class="span-10 p-1 span-md-10 span-sm-12 span-pk-12">
                    <div class="grid gap-1 clmn-4 clmn-md-2 clmn-sm-2 clmn-pk-1">
                        @foreach ($products as $product)
                        <div class="card m-1">
                            <img class="card-img" src="{{$product->imagen}}" alt="Vans">
                            <div class="card-img-overlay d-flex justify-content-end">
                              <a href="#" class="card-link text-danger like">
                                <i class="fas fa-heart"></i>
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