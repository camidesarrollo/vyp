@extends('layout.app')
@section('contenido')

<input type="hidden" name="cantidad" id="cantidad" value="{{ $productos }}">
<div class="container mt-5 mb-5">
    <div class="container row">
        <div class="row text-center">
            <h1 class="white">Listado Productos</h1>
        </div>
        <div class="col-lg-3 container-sidebar">
            <div class="sidebar-content">
                @include('lista.listado-categoria')
                @include('lista.listado-producto')
            </div>
        </div>
        <div class="col-lg-9">
            @include('filter.filter')
            
            <div class="row list_productos">

            </div>
            
            @include('filter.filter_buttom')
            
        </div>
    </div>

</div>
@endsection