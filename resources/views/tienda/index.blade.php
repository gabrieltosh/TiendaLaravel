@extends('tienda.template')

@section('contenido')

    <div class="productos">
        @foreach($productos as $producto)
            <div class="producto">
                <h3>{{ $producto->name}}</h3>
                <img src="{{$producto->imagen}}" alt="">
                <div class="producto-info">
                    <p>{{$producto->extraer}}</p>
                    <p>Precio: ${{number_format($producto->price,2)}}</p>
                    <p>
                        <a href=""> La Quiero</a>
                        <a href="">Leer mas</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

@stop