@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-sm-4 text-center">

        <img src="https://picsum.photos/200/300/?random" style="height:200px" />

    </div>
    <div class="col-sm-8 my-auto">

        <div class="my-3">
            {{-- Nombre --}}
            <p>Nombre: {{ $producto->nombre }}</p>

            {{-- Categoría --}}
            <p>Categoría: {{ $producto->categoria }}</p>
        </div>

        <div class="d-flex">

        {{-- He interpretado el valor falso (0)  como que el producto esta actualmente comprado. --}}

        @if ($producto->pendiente == 0)

            <p class="p-2 br-2 rounded bg-danger text-white">Producto actualmente comprado</p>

        @else

            <button class="btn btn-danger">Comprar</button>

        @endif


        </div>


    </div>
    <div class="mt-4 mx-auto">
        <a class="btn btn-primary" href="{{ route('edit', $producto->id) }}">Editar producto</a>
        <a class="btn btn-secondary" href="{{ url('productos') }}">Volver al listado de productos</a>

    </div>
</div>

@stop
