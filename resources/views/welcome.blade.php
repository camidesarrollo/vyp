@extends('layout.app')
@section('contenido')
<meta name="_token" content="{{ csrf_token() }}"/>
{{ csrf_field() }}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<br>
<br>
@include('card.card-info')
<br>
@include('card.card-redirect')
<br>
@include('owlcarousel.categorias')
<div class="container">
    <h1 style="text-align: center;">Somos líderes en la industria del packaging de productos asociados a cartulina,
        cartón corrugado y microcorrugado.</h1>
</div>
<br>
@include('owlcarousel.productos-destacados')

<br>
@include('card.card-client')



@include('modal.modal_agregarProducto')

<br>
@endsection
