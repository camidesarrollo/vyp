<div class="container pt-5">
    <h2 class="text-center text-uppercase mb-5 section-title slider-title"><span class="inline-title line_span text_relacionado">Productos Relacionados<span></h2>
    <div class="owlcarousel-productos">
        <div class="carousel-wrap">
            <div id="sync1" class="owl-carousel owl-theme">
                @foreach($productosCategoria as $key => $value )
                <!-- <div class="card" id="tarjeta_productos" onmouseover="aparecer('modal_detalle_{{$key}}')"
                    onmouseout="desaparecer('modal_detalle_{{$key}}')">

                    <div>
                        <img class="img-fluid w-100"
                            src="{{asset('imagenes/Productos')}}/{{$value->nombre_categoria}}/{{$value->url}}"
                            alt="Sample">
                    </div>

                    <div class="card-body text-center">
                        <span class="small text-muted text-uppercase mb-2"><a
                                class="titulo_tipo">{{$value->nombre_categoria}}</a></span>
                        <h5 
                            class="titulo_producto">{{$value->nombre_producto}}</h5>
                        <br>
                        <div class="contenedorBotones">
                            <button type="button" class="btn btn-modern btn-md btn-dark boton_producto font-size-medium">
                                Seleccionar opciones
                            </button>
                        </div>

                    </div>

                </div> -->
                <div class="product-grid">
                    <div class="product-image">
                        <a href="{{route('producto.fichaProducto',$value->id_imagen)}}" class="image">
                            <img    src="{{asset('imagenes/Productos')}}/{{$value->url_categoria}}/{{$value->url}}">
                        </a>
                        <ul class="product-links">
                            <li><a href="#" onclick="abrirModal({{$value->id_imagen}})"><i class="fas fa-share-square" aria-hidden="true"></i></a></li>
                        </ul>
                        <a href="" class="add-to-cart">Cotizar</a>
                    </div>
                    <div class="product-content">
                        <div class="price"><span class="category-list"><a href="{{route('categoria',$value->id_categoria)}}">{{$value->nombre_categoria}}</a></span></div>
                        <h3 class="title-producto title"><a class="title-producto title " href="{{route('producto.fichaProducto',$value->id_imagen)}}">{{$value->nombre_producto}}</a></h3>
                        
                    </div>
                </div>
                <!-- Card -->
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
function aparecer(x) {
    // x.css('display','none');
    // $( this ).css( 'display','none' );
    var encontrar = x.search("modal_detalle_");
    if (encontrar > -1) {
        $("#" + x).css("display", "block");
        $(".contenedorBotones").css("flex-direction", "row");
    } else {
        $("#" + x).css("display", "contents");
    }

}

function desaparecer(x) {
    $("#" + x).css("display", "none");
    var encontrar = x.search("modal_detalle_");
    if (encontrar > -1) {
        $(".contenedorBotones").css("flex-direction", "column");
    }

}
</script>

