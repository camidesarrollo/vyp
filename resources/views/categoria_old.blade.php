@extends('layout.app')

@section('contenido')
<br>
<br>
<script>
function modalCotizar(urlimag, nombreP, idProducto){
$(".imagen-producto-pequeno ").attr("src",urlimag);
$("#nombreProducto").html(nombreP);
cotizar(idProducto,nombreP,1,urlimag);
}


function cotizar(elementId, elementName, elementQuantity, elementimageUrl) {

    let basket = JSON.parse(localStorage.getItem('basket')); // Parse data from localstorage
    // element.imageUrl is a part of backend data received from JSON file
    // element.price is a part of backend data received from JSON file


    if (!basket) {
        basket = [];
    }

   // console.log("1");
    // find the index of the item if already in basket
    const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId === elementId);
   // console.log("2");
    if (itemIndexInBasket !== -1) {
       // console.log("3");
       basket[itemIndexInBasket].elementQuantity = elementQuantity + parseInt(basket[
                        itemIndexInBasket].elementQuantity);
    } else {
       // console.log("4");
        basket.push({
            elementId,
            elementName,
            elementQuantity,
            elementimageUrl
        }); // Push not existing data to localstorage
    }
   // console.log("5");
    localStorage.setItem('basket', JSON.stringify(basket));
   // console.log("6");
   // console.log(window.localStorage.getItem('basket'));
   console.log("cotizar");
    console.log(basket);
   agregarItemCarrito();
}

function mostrarLink(x) {
    $("a#abrirModal_" + x).css("display", "initial")
}

function ocultarLink(x) {
    $("a#" + x).css("display", "none")

}
</script>
<br>
<div class="container">
    <div class="card-columns d-flex justify-content-center" style="dir">
    <div class="col-sm-3 target">
            <div id="accordion">
                <div class="card listado-productos">
                    <div class="card-header" id="headingOne">
                        <h3 class="mb-0 tituloListado">
                            <!-- <button class="titulo-lista btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                PRODUCTOS
                            </button> -->
                            PRODUCTOS
                        </h3>
                        <div>
                            <i class="bi bi-plus" onclick="mostrarListado()" style="display:none"></i>
                            <i class="fas fa-minus" onclick="ocultarListado()"></i>
                        </div>
                    </div>
                    <style>
                    .tituloListado {
                        font-weight: 700;
                        font-size: 15px;
                    }

                    #headingOne {
                        display: flex;
                        flex-direction: row;
                        justify-content: space-between;
                    }

                    .accordion {
                        border-bottom: 1px solid #e7e7e7;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 20px;
                    }

                    .titulo-lista {
                        padding: 0;
                        background: none;
                        border: none;
                    }

                    .opcionesAccordion {
                        margin-bottom: 0;
                        padding-bottom: 0;
                        border-bottom-color: rgba(0, 0, 0, .06);
                        padding: .7143em 0;
                        border-width: 0;
                        margin: 0;
                        font-size: .9286em;

                    }

                    .product-categories {
                        border-top-width: 0;
                        border-top-color: rgba(0, 0, 0, .06);
                        position: relative;
                        border-width: 0;
                        padding: 0;
                        margin: 0;
                        border-top: 1px solid;
                        transition: all 0.3s;
                        line-height: 24px;
                    }

                    .opcionesAccordion{
                        padding-top: 0px;
                    }
                    </style>
                    <div id="collapseOne" class="collapse show opcionesAccordion" aria-labelledby="headingOne"
                        data-parent="#accordion">
                        <div class="card-body opcionesAccordionListado">
                            @foreach ($tipo as $key => $tipos)
                            <ul class="product-categories" style="">
                                <li class="cat-item cat-item-38 cat-parent closed">
                                    <div style="display: flex; flex-direction: row;justify-content: space-between;">
                                        <a href="{{asset('categoria-producto')}}/{{$tipos->id_tipo}}" style="color: #777777; font-family: Open Sans,sans-serif; font-size: 14px;">{{$tipos->nombre_tipo}}</a><span
                                            class="toggle"></span>
                                        <i class="bi bi-caret-up-fill iconoMenuMostrar_{{$tipos->id_tipo}}"
                                            onclick="mostrarSubMenu('{{$tipos->id_tipo}}')" style="display: none;"></i>
                                        <i class="bi bi-caret-down-fill iconoMenuOcultar_{{$tipos->id_tipo}}"
                                            onclick="mostrarSubMenu('{{$tipos->id_tipo}}')"></i>
                                    </div>
                                    @foreach ($producto as $clave => $productos)

                                        @if($productos->id_tipo == $tipos->id_tipo)
                                        <ul class="children" style="display:none;" id="subMenu_{{$tipos->id_tipo}}">
                                            <li class="cat-item cat-item-156"><a href="{{asset('/producto')}}/{{$productos->id_producto}}/{{$productos->url}}" style="color: #777777; font-family: Open Sans,sans-serif; font-size: 14px;">{{$productos->nombre}}</a>
                                                <span class="count"></span>

                                            </li>
                                        </ul>
                                        @endif
                                    @endforeach
                                </li>
                            </ul>

                            @endforeach
                        </div>
                        <div class="card-body">
                        <h3 class="mb-0 tituloListado">
                            <!-- <button class="titulo-lista btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                PRODUCTOS
                            </button> -->
                            PRODUCTOS DESTACADOS
                        </h3>
                            <div class="block">
                                <div class="card-columns d-flex justify-content-center" style="flex-direction: column;">
                                    @foreach ($productosDestacados as $key => $value)
                                    @if($key < 6) <div class="card mb-3">
                                        <div class="row no-gutters" style="text-align: center; align-items: center;">
                                            <div class="col-md-2">
                                                <img
                                                    src="{{asset('imagenes/Productos/')}}/{{$value->nombre_tipo}}/{{$value->url_img}}">
                                            </div>
                                            <div class="col-md-10">
                                                <div class="card-body">
                                                    <a href="{{asset('imagenes/Productos/')}}/{{$value->nombre_tipo}}/{{$value->url_img}}" title="{{$value->nombre}}" style="font-weight: 600;">
                                                        <span class="product-title">{{$value->nombre}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">

        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th style="display:none">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($producto as $key => $produc)
                <tr>
                    
                    <td>
                        <div class="product-inner" onmouseover="mostrarLink('{{$key}}');" onmouseout="ocultarLink('abrirModal_{{{$key}}}')">

                            <div class="product-image">

                                <a href="{{asset('producto')}}/{{$produc->id_producto}}/{{$produc->url}}">
                                    <div class="inner img-effect">
                                    <img width="300" height="300" alt="{{$produc->nombre}}"
                                    @if($produc->id_tipo == 4)
                                        src="{{asset('imagenes/Productos')}}/Carton_blanco/{{$produc->url_img}}">
                                    @else
                                        src="{{asset('imagenes/Productos')}}/{{$produc->nombre_tipo}}/{{$produc->url_img}}">
                                    @endif

                                </div>
                                </a>
                            </div>
                            <div class="product-content">
                                <span class="category-list"><a
                                        href="https://vanni.cl/categoria-producto/cajas-de-carton/" rel="tag">{{$produc->nombre_tipo}}</a>
                                        <!-- ,<a href="https://vanni.cl/categoria-producto/eco-amigables/"
                                        rel="tag">ECO AMIGABLES</a> -->
                                        </span>
                                <a class="product-loop-title"
                                    href="{{asset('producto')}}/{{$produc->id_producto}}/{{$produc->url}}">
                                    <h3 class="woocommerce-loop-product__title">{{$produc->nombre}}</h3>
                                </a>

                                <div class="description">
                                    <p class="post-excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    </p>
                                </div>

                                <div class="add-links-wrap">
                                    <div class="add-links clearfix">
                                    @if($produc->id_tipo == 4)
                                        @if($produc->id_producto != 26 || $produc->id_producto != 21)
                                            <a href="{{asset('producto')}}/{{$produc->id_producto}}/{{$produc->nombre}}"
                                                class="viewcart-style-2 button product_type_variable add_to_cart_button"
                                                >Ver opciones
                                            </a>
                                            @else
                                            <a id="botonCotizar_{{$key}}" href="{{asset($produc->url)}}" data-toggle="modal"
                                                data-target="#ModalCotizacion"
                                                class="viewcart-style-2 button product_type_variable add_to_cart_button"
                                                Onclick="modalCotizar('{{asset('imagenes/Productos')}}/Carton_blanco/{{$produc->url_img}}', '{{$produc->nombre}}','{{$produc->id_producto}}', '{{$produc->url}}')">Cotizar
                                            </a>
                                            @endif
                                        <a id="abrirModal_{{{$key}}}" data-toggle="modal" data-target="#exampleModal" class="viewcart-style-2 button product_type_variable add_to_cart_button" style="background-color: #f4f4f4; display:none"  
                                        OnClick="enviarDatosModal('{{$produc->id_producto}}', '{{asset('imagenes/Productos')}}/Carton_blanco/{{$produc->url_img}}')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
                                                    <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
                                                </svg>
                                        </a>
                                    @else
                                        <?php
                                            $validar = false; 
                                                if($produc->id_producto != 4){
                                                    if($produc->id_producto != 9){
                                                        if($produc->id_producto != 19){
                                                            if($produc->id_producto != 36){
                                                                if($produc->id_producto != 50){
                                                                    if($produc->id_producto != 54){
                                                                        $validar = true;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            
                                            
                                        ?>
                                        @if($validar == false )
                                            <a href="{{asset('producto')}}/{{$produc->id_producto}}/{{$produc->nombre}}"
                                                    class="viewcart-style-2 button product_type_variable add_to_cart_button"
                                                    >Ver opciones
                                                </a>
                                            @else
                                            <a id="botonCotizar_{{$key}}" href="{{asset($produc->url)}}" data-toggle="modal"
                                                data-target="#ModalCotizacion"
                                                class="viewcart-style-2 button product_type_variable add_to_cart_button"
                                                Onclick="modalCotizar('{{asset('imagenes/Productos')}}/{{$produc->nombre_tipo}}/{{$produc->url_img}}', '{{$produc->nombre}}','{{$produc->id_producto}}', '{{$produc->url}}')">Cotizar
                                            </a>
                                            @endif
                                    @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                      

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@include('modal.modal_producto')
@include('modal.modal_agregarProducto')
<style>
.ProductLeftSidebar {
    border: 1px solid #e7e7e7;
    padding: 15px 30px;
}

.product-categories {
    border-bottom-color: rgba(0, 0, 0, .06);
    padding: .7143em 0;
    border-width: 0;
    margin: 0;
    list-style: none;
    font-size: .9286em;
}

.sbg_title {
    font-weight: 600;
    font-size: 15px;
}

input {
    margin: 0;
    padding: 0;
    border: absolute;
}

input:focus {
    border: none;
    outline: none;
}

form {
    text-align: center;
    margin: 10%;
}

.quantity input {
    display: inline-block;
    width: 40px;
    height: 40px;
    padding 0;
    margin: 10px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
    /* border-right: none; */
}

.quantity input:last-child {
    border-right: 1px solid #ccc;
}

input[type="button"] {
    cursor: pointer
}

.botones-social {
    color: #FC0 !important;
    border-color: #FC0 !important;
}

@media (max-width: 991px) {
    .target {
        display: none;
    }
}
</style>
<style>
/* ul {
	list-style:none;
}

ul li {
	display:inline-block;
	position: relative;
}

ul li:hover {
	background:#E6344A;
}

ul li a {
	color:#fff;
	display:block;
	text-decoration:none;
	padding: 20px;
}

ul li a span {
	margin-right:10px;
}

ul li:hover .children {
	display:block;
}

ul li .children {
	display: none;
	background:#011826;
	position: absolute;
	width: 150%;
	z-index:1000;
}

ul li .children li {
	display:block;
	overflow: hidden;
	border-bottom: 1px solid rgba(255,255,255,.5);
}

ul li .children li a {
	display: block;
}

ul li .children li a span {
	float: right;
	position: relative;
	top:3px;
	margin-right:0;
	margin-left:10px;
}

ul li .caret {
	position: relative;
	top:3px;
	margin-left:10px;
	margin-right:0px;
}

@media screen and (max-width: 800px) {

	ul li {
		display: block;
		border-bottom:1px solid rgba(255,255,255,.5);
	}

	ul li a {
		display: block;
	}

	ul li:hover .children {
		display: none;
	}

	ul li .children {
		width: 100%;
		position: relative;
	}

	ul li .children li a {
		margin-left:20px;
	}

	ul li .caret {
		float: right;
	} */
}
</style>
<style>
@media (min-width: 576px) {
    .product-inner {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    @media (min-width: 576px) {
        .product-image {
            -webkit-flex: 0 0 250px;
            -ms-flex: 0 0 250px;
            flex: 0 0 250px;
            margin: 0 20px 0 0;
        }
    }

    .product-image {
        margin-bottom: 1rem;
        min-height: 90px;
    }

    @media (min-width: 992px) {
        .product-image {
            font-size: 1em;
        }
    }

    .product-image {
        font-size: 1.2em;
    }

    .product-image .stock {
        background: #fff;
    }

    .product-image {
        display: block;
        position: relative;
        border: none;
        width: 100%;
        padding: 0;
    }
}

.product-image .labels {
    line-height: 1;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    position: absolute;
    z-index: 2;
    top: .8em;
    font-size: 10px;
    left: .8em;
    text-align: center;
}

.product-image a {
    outline: none !important;
    color: #fc0;
    text-decoration: none;
    background-color: transparent;
}

product-image .labels .onhot,
.product-image .labels .onsale {
    padding: 5px 11px;
    margin-bottom: 5px;
}

.labels .onhot,
.labels .onsale {
    border-radius: 12px;
    padding-left: .8em;
    padding-right: .8em;
}

@media (min-width: 576px) {
    .product-content {
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        max-width: calc(100% - 250px);
    }
}

.category-list {
    display: block;
    font-size: .625rem;
    opacity: .8;
    text-transform: uppercase;
    line-height: 1.7;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.product-content {
    padding-bottom: 1px;
}

.product-loop-title {
    font-size: 1em;
    text-decoration: none;
}

.woocommerce-loop-product__title {
    white-space: normal !important;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-left: .5rem;
    margin-right: .5rem;
    font-weight: 600;
    line-height: 1.35;
    letter-spacing: -.01em;
    margin-bottom: .45rem;
    font-size: 16px !important;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css" />

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>

<script>
function mostrarSubMenu(key) {
   // console.log("aqui");
    if ($("ul#subMenu_" + key).css("display") == "block") {
        $("ul#subMenu_" + key).css("display", "none");
    } else {
        $("ul#subMenu_" + key).css("display", "block");
    }
    // if( == true){
    //    // console.log("aqui2");
    // }
       // console.log($("i.iconoMenuOcultar_"+ key).css("display"));
    if($("i.iconoMenuOcultar_"+ key).css("display") == "inline"){
        $("i.iconoMenuMostrar_"+ key).css("display", "inline");  
        $("i.iconoMenuOcultar_"+ key).css("display", "none");   
    }else{
        $("i.iconoMenuOcultar_"+ key).css("display", "inline");
        $("i.iconoMenuMostrar_"+ key).css("display", "none");  
    }
}
$(document).ready(function() {
    $.noConflict();
    $('#example').DataTable({
        "dom": '<lf<t>ip>',
		"language"	: { "url": "{{asset('')}}/js/dataTables.spanish.json"},
    });

});
</script>

@endsection