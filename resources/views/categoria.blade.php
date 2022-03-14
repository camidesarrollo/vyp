@extends('layout.app')
@section('contenido')

<input type="hidden" name="cantidad" id="cantidad" value="{{ $productos }}">
<input type="hidden" name="cantidad" id="id_categoria" value="{{ $id_categoria }}">

<div class="container mt-5 mb-5">
    <div class="container row">
        <div class="row text-center">
            <h1 class="white">Listado Productos: {{$datoscategoria->nombre_categoria}}</h1>
        </div>
        <div class="col-lg-3 container-sidebar">
            <div class="sidebar-content">
                @include('lista.listado-categoria')
                @include('lista.listado-producto')
            </div>
        </div>
        <div class="col-lg-9">
            @include('filter.filter')
            <div class="row list_productos_categoria">

            </div>
            @include('filter.filter_buttom')
        </div>
    </div>

</div>
@endsection