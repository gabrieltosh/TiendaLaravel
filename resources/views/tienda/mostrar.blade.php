@extends('tienda.template')

@section('contenido')
    <h1>Detalle de Producto</h1>

    <div class="producto-bloque">
        <img src="{{$producto->imagen}}" width="300" alt="">
    </div>
    <div class="producto bloque">
        <h3>{{$producto->name}}</h3>
        <div class="producto-info">
        <p>{{$producto->descripcion}}</p>
        <p>Precio:{{ number_format($producto->precio,2)}}</p>
        <p>
            <a href="">La quiero</a>
        </p>
        </div>
        <p><a href="{{route('home')}}">Regresar</a></p>
    </div>