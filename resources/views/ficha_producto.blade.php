@extends('layout.app')
@section('contenido')
<div class="container">
    <div class="row main-content-wrap">
        <div class="col-lg-3 container-sidebar">
            <div class="sidebar-content">
                @include('lista.listado-categoria') 
                <div class="bg-faded"
                    style="align-items: center;text-align: center; display: flex; flex-direction: column;">
                    <div class="col-md-4">
                        <div class="h-100 justify-content-center text-center align-center  pt-3 pb-3"
                            style="display:flex; direction-flex:row">
                            <div class="mr-3">
                                <div class="porto-just-icon-wrapper porto-icon none"
                                    style="color:#f7c104;font-size:35px;"><i class="fas fa-shipping-fast"></i></div>
                            </div>
                            <div class="porto-sicon-header">
                                <h3 class="porto-sicon-title" style="font-weight:700;font-size:14px;line-height:14px;">
                                    DESPACHO GRATIS EN R.</h3>
                                <h3 style="font-weight:700;font-size:14px;line-height:14px;"> METROPOLITANA</h3>
                                <p style="font-size:13px;line-height:17px;">Por compras desde $90.000 + iva</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="h-100 justify-content-center text-center align-center  pt-3 pb-3 "
                            style="display:flex; direction-flex:row">
                            <div class="mr-3">
                                <div class="porto-just-icon-wrapper porto-icon none"
                                    style="color:#f7c104;font-size:35px;"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="porto-sicon-header">
                                <h3 class="porto-sicon-title" style="font-weight:700;font-size:14px;line-height:14px;">
                                    PRODUCTOS DE
                                    CALIDAD</h3>
                                <p style="font-size:13px;line-height:17px;">Con altos estándares de exigencia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="h-100 justify-content-center text-center align-center  pt-3 pb-3"
                            style="display:flex; direction-flex:row">
                            <div class="mr-3">
                                <div class="porto-just-icon-wrapper porto-icon none"
                                    style="color:#f7c104;font-size:35px;"><i class="far fa-smile-wink"></i></div>
                            </div>
                            <div class="porto-sicon-header">
                                <h3 class="porto-sicon-title" style="font-weight:700;font-size:14px;line-height:14px;">
                                    ASESORÍA
                                    PERSONALIZADA</h3>
                                <p style="font-size:13px;line-height:17px;">Para tus proyectos especiales</p>
                            </div>
                        </div>
                    </div>
                </div>
                @include('lista.listado-producto')
            </div>
        </div>
        <div class="main-content col-lg-9">
            <div class="row">
                <div class="col-lg-6">
                <input type="hidden" name="" id='id_producto' value="{{$producto[0]->id_imagen}}">
                    <div class="product-images images">
                        <img id="modal_imagen_producto"
                        src="{{asset('imagenes/Productos')}}/{{$producto[0]->url_categoria}}/{{$producto[0]->url}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="product_title entry-title show-product-nav">
                        <a id="modal_nombre_producto" href="{{route('producto.fichaProducto',$producto[0]->id_imagen)}}">{{$producto[0]->nombre_producto}}</a>
                    </h2>
                    <div class="description woocommerce-product-details__short-description">
                        <p style="text-align: justify;">Envase de cartulina natural kraft con antigrasa ideal para
                            sushi. Disponen de orificios de escape de vapor para una mayor conservación de los
                            alimentos, además estas cajas facilitan su transporte y son amigables con el medio
                            ambiente.</p>
                    </div>
                    <p style="text-align: justify;">
                        <span style="font-size: 18px;">
                            <strong>
                                <span style="color: #000000;" id="modal_embalaje_producto">{{$producto[0]->nombre_embalaje}}</span>
                            </strong>
                        </span>
                    </p>
                    <div class="porto-separator   m-t-none">
                        <hr class="separator-line  vc_custom_1489801878266 align_center solid"
                            style="background-color:#dee5e8;">
                    </div>
                    <div class="product_meta" style="display: flex;flex-direction: column; margin-top: 30px;">
                            <!-- <span class="sku_wrapper">SKU: <span class="sku">511.561</span></span> -->
                            <span class="posted_in" id="modal_producto_categoria">Categorías: <a
                                href="{{route('categoria',$producto[0]->id_categoria)}}"
                                rel="tag">{{$producto[0]->nombre_categoria}}</a></span>
                                @if(count($tipo)>1)
                                    <span class="posted_in" id="tipo">Tipo: <select id="select_tipo">
                                    <option value="0">Seleccione el tipo de producto</option>
                                    @foreach($tipo as $key => $pro)
                                    <option value="{{$pro->id_tipo}}">{{$pro->nombre_tipo}}</option>
                                    @endforeach
                                    </select>   </span>
                                    @if(count($medida)>1)
                                    <span class="posted_in" id="medidas" style="display:none">
                                    </span> 
                                    
                                    @endif
                                @else
                                <span class="posted_in" id="tipo">Tipo: 
                                <select id="select_tipo" style="display:none">
                                    @foreach($tipo as $key => $pro)
                                    <option value="{{$pro->id_tipo}}">{{$pro->nombre_tipo}}</option>
                                    @endforeach
                                    </select>    
                                <a rel="tag" id="ficha_tipo" data-id="{{$tipo[0]->id_tipo}}" >{{$tipo[0]->nombre_tipo}}</a>
                                </span>
                                
                                @if(count($medida)>1)
                                    <span class="posted_in" id="medidas">Medidas: 
                                        <select id="select_medidas">
                                        <option value="0">Seleccione el medidas de producto</option>
                                        @foreach($medida as $key => $medidas)
                                        <option value="{{$medidas->id_medida}}">{{$medidas->nombre_medida}}</option>
                                        @endforeach
                                    </select>
                                    </span> 
                                @else
                                    @if(count($medida) == 1)
                                    <span class="posted_in" id="medidas">Medidas: 
                                    <a rel="tag" id="ficha_medida" data-id="{{$medida[0]->id_medida}}" >{{$medida[0]->nombre_medida}}</a>
                                    </span> 
                                    @endif
                                @endif

                                @endif
                            
                          
                                
                            @if(count($colores) > 0)
                            <div class=" ">
                                <span id="" class="copy3 primary" style="display:none">Color: </span><span id=""
                                class="copy3 primary notranslate text-color"></span>    
                        
                            </div>
                            
                            <span class="posted_in  colores">
                            <ul class="colors">
                               @foreach($colores as $key => $color)
                               <li data-color="{{$color->id_color}}"  data-nombrecolor="{{$color->color}}" style="background-color:{{$color->hex_code}}" class="buton_color" onclick="animacionColores('color_{{$color->id_color }}')" id="color_{{$color->id_color }}"></li>
                               @endforeach
                            </ul>
                            </span>
                            @endif
                        </div>
                    <form class="cart">
                        
                        <div class=" quantity buttons_added col"> 
                            <button type="button" value="-" class="minus" onclick="minus()" style="">-</button>
                            <input type="number" id="quantity_61ce0a7a9dce3" class="input-text qty text form-control" step="1" min="1" max="" name="quantity" value="1" title="Cantidad" size="4" placeholder="" inputmode="numeric">
                                    <button type="button" value="+" class="plus" onclick="plus()" style="">+</button> 

                                    <button type="button" name="add-to-cart" class="btn btn-cotizar add-to-cart" style="margin-left: 21px;" onclick="parametrosCotizar()"><i class="fas fa-shopping-bag" aria-hidden="true"></i>Cotizar</button>
                                
                        </div>
                            <!-- <div class="quantity buttons_added">
                                <button type="button" value="-" class="minus" onclick="minus()">-</button>
                                <input type="number" id="quantity_61ce0a7a9dce3" class="input-text qty text" step="1"
                                    min="1" max="" name="quantity" value="1" title="Cantidad" size="4" placeholder=""
                                    inputmode="numeric">
                                <button type="button" value="+" class="plus" onclick="plus()">+</button>
                            </div>

                            <button type="button" name="add-to-cart"
                                class="single_add_to_cart_button button alt" onclick="cotizar()">Cotizar</button>

                            <a href="https://vanni.cl/cotizacion/" tabindex="1"
                                class="wc-action-btn view-cart-btn button wc-forward">Ver carrito</a> -->
                        </form>
                        <section class="mb-4 botones-redes">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1 facebook" href="https://www.facebook.com/envases.vyp" role="button"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1 twitter" href="#!" role="button"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </section>

                </div>
            </div>
            <div>
                @include('owlcarousel.productos_relacionados')
            </div>
        </div>

    </div>
</div>

<style>
.widget {
    margin-bottom: 1.875rem;
    margin-top: 1.875rem;
}

.widget_product_categories,
.widget_price_filter,
.widget_layered_nav,
.widget_layered_nav_filters,
.widget_rating_filter,
.sidebar-box {
    border: none;
    margin-bottom: 1.0714em;
    margin-top: 0;
    position: relative;
    background: none;
}

.widget:first-child {
    margin-top: 0;
}

.left-sidebar .widget_product_categories {
    border: 1px solid #e7e7e7;
    padding: 15px 30px;
}

.widget>div>ul,
.widget>ul {
    font-size: .9286em;
    border-bottom: 1px solid;
    margin-top: -8px;
    margin-bottom: 0;
}

.widget ul,
.widget ol {
    list-style: none;
    padding: 0;
}

.widget_product_categories>ul,
.widget_product_categories>div>ul,
.widget_product_categories>*,
.widget_price_filter>ul,
.widget_price_filter>div>ul,
.widget_price_filter>*,
.widget_layered_nav>ul,
.widget_layered_nav>div>ul,
.widget_layered_nav>*,
.widget_layered_nav_filters>ul,
.widget_layered_nav_filters>div>ul,
.widget_layered_nav_filters>*,
.widget_rating_filter>ul,
.widget_rating_filter>div>ul,
.widget_rating_filter>*,
.sidebar-box>ul,
.sidebar-box>div>ul,
.sidebar-box>* {
    padding: 0.7143em 0;
    border-width: 0;
    margin: 0;
}

.widget>div>ul,
.widget>ul {
    border-bottom-color: rgba(0, 0, 0, .06);
}
</style>
@endsection




<!-- INSERT INTO `medida_tipo` (`id_medida_tipo`, `id_tipo`, `id_medida`, `id_imagen`) VALUES (109,22,78,45);
INSERT INTO `medida_tipo` (`id_medida_tipo`, `id_tipo`, `id_medida`, `id_imagen`) VALUES (107,21,76,45);
INSERT INTO `medida_tipo` (`id_medida_tipo`, `id_tipo`, `id_medida`, `id_imagen`) VALUES (108,21,117,43); -->


									
								




