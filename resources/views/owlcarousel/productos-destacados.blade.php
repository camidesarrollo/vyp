<div class="container pt-5">
    <h2 class="text-center  mb-5 section-title slider-title titulo-owlcarousel"><span class="titulo-owlcarousel">Productos Destacados<span></h2>
    <div class="owlcarousel-productos">
        <div class="carousel-wrap">
            <div id="sync1" class="owl-carousel owl-theme">
                @foreach ($productosDestacados as $key => $value)
                <!-- <div class="card" id="tarjeta_productos">

                    <div>
                        <img class="img-fluid w-100"
                            src="{{asset('imagenes/Productos')}}/{{$value->nombre_categoria}}/{{$value->url}}"
                            alt="Sample">
                    </div>

                    <div class="card-body text-center">
                        <span class="small text-muted text-uppercase mb-2"><a
                                class="titulo_tipo">{{$value->nombre_categoria}}</a></span>
                        <h5 class="titulo_producto">{{$value->nombre_producto}}</h5>
                        <br>
                        <div class="contenedorBotones">
                            @if($value->botonModal == true)
                            <button type="button"
                                class="btn btn-modern btn-md btn-dark boton_producto font-size-medium">
                                Seleccionar opciones
                            </button>
                            @else
                            <button type="button" class="btn btn-modern btn-md btn-dark boton_producto font-size-medium"
                                onmouseover="aparecer('icono_bag_{{$key}}')"
                                onmouseout="desaparecer('icono_bag_{{$key}}')">
                                <span class="icono_bag" id="icono_bag_{{$key}}"><i
                                        class="bi bi-bag-dash"></i></span>Cotizar
                            </button>
                            @endif
                        </div>

                    </div>

                </div> -->
                <div class="product-grid">
                    <div class="product-image">
                        <a href="{{ route('producto.fichaProducto', $value->id_imagen) }}" class="image">
                            <img    src="{{asset('imagenes/Productos')}}/{{$value->url_categoria}}/{{$value->url}}">
                        </a>
                        <ul class="product-links">
                            <li><a href="#" onclick="abrirModal({{$value->id_imagen}})"><i class="fas fa-share-square" aria-hidden="true"></i></a></li>
                        </ul>
                        <a href="{{ route('producto.fichaProducto', $value->id_imagen) }}" class="add-to-cart">Cotizar</a>
                    </div>
                    <div class="product-content">
                        <div class="price"><span class="category-list"><a href="{{ route('categoria', $value->id_categoria) }}">{{$value->nombre_categoria}}</a></span></div>
                        <h3 class="title-producto title"><a class="title-producto title " href="{{ route('producto.fichaProducto', $value->id_imagen) }}">{{$value->nombre_producto}}</a></h3>
                        
                    </div>
                </div>
                <!-- Card -->
                @endforeach
            </div>

        </div>
    </div>

</div>
