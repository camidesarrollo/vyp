<aside id="block-widget-8" class="widget sbg_widget ProductLeftSidebar widget-block mt-3">
    <div id="" class="column">
        <h3 class="widget-title sbg_title text-center">Productos Destacados</h3>
        <div class="row">
            <div class="lista-group">
                @foreach($productosDestacados as $key => $value )
                @if($key < 6) <div class="d-flex">
                    <div class="col-sm-3">
                        <img src="{{asset('imagenes/Productos')}}/{{$value->url_categoria}}/{{$value->url}}"
                            alt="Generic placeholder image" width="85" height="85" class="mr-lg-5">
                    </div>
                    <div class="col-sm-9 contenedor-text-dest">
                        <a href="{{route('producto.fichaProducto', $value->id_imagen)}}" title="{{$value->nombre_producto}}">
			                <span class="product-title">{{$value->nombre_producto}}</span>
		                </a>
                    </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    </div>
</aside>

                <!-- <div class="media align-items-lg-center flex-column flex-lg-row p-3"> <img
                                                        src="{{asset('imagenes/Productos')}}/{{$value->nombre_categoria}}/{{$value->url}}"
                                                        alt="Generic placeholder image" width="85" height="85"
                                                        class="mr-lg-5">
                                                    <div class="media-body">
                                                        <span class="small text-muted text-uppercase mb-2"><a
                                                                class="titulo_tipo">{{$value->nombre_categoria}}</a></span>
                                                        <h5 class="titulo_producto">{{$value->nombre_producto}}</h5>
                                                    </div>
                                                </div> -->