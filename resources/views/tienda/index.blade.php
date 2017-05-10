@extends('tienda.template')

@section('contenido')

    <div class="productos">
        @foreach($productos as $producto)
            <div class="producto">
                <h3>{{ $producto->name}}</h3>
                <img src="{{$producto->imagen}}" alt="">
                <div class="producto-info">
                    <p>{{$producto->extraer}}</p>
                    <p>Precio: ${{number_format($producto->precio,2)}}</p>
                    <p>
                        <a href=""> La Quiero</a>
                        <a href="{{route('producto-detalle',$producto->slug)}}">Leer mas</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

@stop