<aside id="woocommerce_product_categories-3"
                    class="widget sbg_widget ProductLeftSidebar woocommerce widget_product_categories">
                    
                    <div id="accordion">
                    @foreach($categoria as $key => $cate )
                        <div class="card">
                            <div class="card-header" id="heading{{$cate->id_categoria}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link hero__btn " data-toggle="collapse" style="font-size: 15px; line-height: 21px; color: #313131;font-weight: 600; font-family: Poppins,sans-serif;"
                                        data-target="#collapse{{$cate->id_categoria}}" aria-expanded="true" aria-controls="collapse{{$cate->id_categoria}}">
                                        {{$cate->nombre_categoria}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse{{$cate->id_categoria}}" class="collapse show" aria-labelledby="heading{{$cate->id_categoria}}"
                                data-parent="#accordion">
                                <div class="card-body">
                                <ul style="">
                                    @foreach($productosCategoria as $key => $detacados )
                                        @if($detacados->id_categoria == $cate->id_categoria)
                                        <li class="cart-item-{{$detacados->id_imagen}} "><a
                                                href="{{ route('producto.fichaProducto', $detacados->id_imagen, ) }}" style="font-size: 14px;line-height: 21px;color: #313131;font-weight: 400;font-family: Poppins,sans-serif;" class="titulo-product-cate">{{$detacados->nombre_producto}}</a>
                                        </li>
                                        @endif
                                 
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </aside>