<aside id="woocommerce_product_categories-3"
                    class="widget sbg_widget ProductLeftSidebar woocommerce widget_product_categories">
                    <div id="accordion">
                    @foreach($categoria as $key => $cate )
                        <div class="card categoria-card">
                            <div class="card-header" id="heading{{$cate->id_categoria}}">
                                <h5 class="mb-0 widget-title text-center">
                                    <button class="btn btn-link hero__btn widget-title" data-toggle="collapse"
                                        data-target="#collapse{{$cate->id_categoria}}" aria-expanded="false" aria-controls="collapse{{$cate->id_categoria}}">
                                        {{$cate->nombre_categoria}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$cate->id_categoria}}" class="collapse" aria-labelledby="heading{{$cate->id_categoria}}"
                                data-parent="#accordion">
                                <div class="card-body">
                                    @foreach($productosCategoria as $key => $detacados )
                                        @if($detacados->id_categoria == $cate->id_categoria)
                                        <a class="cat-parent" href="{{ route('producto.fichaProducto', $detacados->id_imagen) }}">{{$detacados->nombre_producto}}</a>
                                        <br>
                                        @endif
                                 
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </aside>