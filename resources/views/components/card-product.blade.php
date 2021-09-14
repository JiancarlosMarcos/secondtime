<div class="border rounded-b-md bg-white m-1 hover:shadow-lg duration-500">
    <div class="object-contain">
        <a href="{{ route('tienda.show',$id=$id ) }}">
            <img src="{{$imagen}}">
        </a>
    </div>
    <div class="flex flex-col justify-between p-4">
        <h3>{{$nombre}}</h3>
        <p class="text-gray-500">
            {{$descripcion}}
        </p>
        <div class="flex flex-row justify-between items-center">
            <div>
                <span class="text-xs text-gray-400"><s>s/{{$precioinicial}}</s></span>
                <h5 class="text-green-800 text-lg">s/{{$preciofinal}}</h5>
            </div>
            <a href="#" class="rounded-md p-2 mt-3 border border-yellow-500  text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 duration-500">Comprar</a>
        </div>
    </div>
</div>