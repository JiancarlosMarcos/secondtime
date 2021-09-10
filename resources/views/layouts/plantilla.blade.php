<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css'); }}">
    <link rel="stylesheet" href="{{ asset('css/app.css'); }}">
    <title>@yield('titlePage')</title>
</head>
<body>

    <header class="p-3 bg-principal text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">                
                <a href="{{Route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 py-2 text-white text-decoration-none h3">
                    SecondTime
                </a>

                <div class="nav col-12 col-lg-8 m-lg-auto mb-2 justify-content-center mb-md-2">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </div>
                <div class="col-auto">
                    {{-- @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                    @else --}}
                        <a href="{{ url('login') }}" class="btn btn-outline-light me-2">Login</a>                        
                        {{-- @if (Route::has('register')) --}}
                            <a href="{{ url('register') }}" class="btn btn-warning">Sign-up</a>
                        {{-- @endif
                        @endauth
                        @endif --}}
                </div>
            </div>
        </div>
    </header>
    
    <nav class="my-nav">
        <div class="container py-1 nav me-auto">
            {{-- @foreach ($categories as $category) --}}
                {{-- <a href="#" class="nav-link text-capitalize">{{$category->nombre}}</a>     --}}
                <a href="{{route('tienda')}}" class="nav-link text-capitalize">Moda</a>
                <a href="{{route('tienda')}}" class="nav-link text-capitalize">Electrónica</a>                
                <a href="{{route('tienda')}}" class="nav-link text-capitalize">Muebles para el Hogar</a>
            {{-- @endforeach --}}
        </div>
    </nav> 

    @yield('content')

    <div class="my-footer container-fluid b-top">
        <footer class=" container py-2 my-2">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inicio</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terminos y condiciones</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Politicas de privacidad</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ayuda</font></font></a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre Nosotros</font></font></a></li>
            </ul>
            <p class="text-center text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2021 SecondTime</font></font></p>
        </footer>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>