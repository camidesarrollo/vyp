<!-- Modal -->
<div class="modal  bd-example-modal-xl modal_producto" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content" style="padding: 15px;">
            <div class="modal-body quickview-wrap quickview-wrap-23599 single-product product-type-simple"
                style="padding: 15px;">
                <input type="hidden" name="" class='modal_id_producto' value="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-images images">
                            <img class="modal_imagen_producto"
                                src="http://localhost/app_vyp/public/imagenes/Productos/Aluminio/Bandeja_De_Aluminio_Con_Tapa_De_Carton_Y_Domo_1.jpg" style="height: 423px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="product_title entry-title show-product-nav">
                            <a class="modal_nombre_producto" id="modal_nombre_producto" href="https://vanni.cl/producto/caja-para-sushi-grande/"></a>
                        </h2>
                        <div class="description woocommerce-product-details__short-description" style="    margin: 0 0 1.25rem;">
                            <p style="  margin: 0;   text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Sed a vulputate nibh, non eleifend mauris. Ut pharetra luctus dui ac finibus. Donec sodales condimentum turpis. 
                        </div>
                        <p style="  margin: 0;   text-align: left;">
                            <span style="font-size: 18px;">
                                <strong style="
    font-weight: 700;     margin-bottom: 1em;
">
                                    <span style="color: #000000;" class="modal_embalaje_producto"></span>
                                </strong>
                            </span>
                        </p>
                        <div class="product_meta" style="display: flex;flex-direction: column; margin-top: 30px;">
                            <!-- <span class="sku_wrapper">SKU: <span class="sku">511.561</span></span> -->
                            <span class="posted_in modal_producto_categoria" id="">Categorías: </span>
                            <span class="posted_in tipo" id="modal_tipo">Tipo: </span>
                            <span class="posted_in medidasModal"  id="modal_medida" style="display:none">
                            </span> 
                            <div class=" posted_in jsx-3657936619 color-swatch-container fa--color-swatches__desktop">
                                <span id="modal_color"
                                class="copy3 primary" style="display:none">Color: </span><span id="modal_color_text"
                                class="copy3 primary notranslate text-color"></span>    
                        
                            </div>
                            <span class="posted_in  colores" id="coloresModal">
                            <ul class="colors" id="modal_colores">
                               
                            </ul>
                            </span>
                        </div>
                        <form class="cart">
                        
                        <div class=" quantity buttons_added col"> 
                            <button type="button" value="-" class="minus" onclick="minus()" style="">-</button>
                            <input type="number" id="quantity_61ce0a7a9dce3" class="input-text qty text form-control" step="1"
                                    min="1" max="" name="quantity" value="1" title="Cantidad" size="4" placeholder=""
                                    inputmode="numeric">
                                    <button type="button" value="+" class="plus" onclick="plus()" style="">+</button> 

                                    <button type="button" name="add-to-cart" class="btn btn-cotizar add-to-cart" style="margin-left: 21px;" 
                                onclick="parametrosCotizarModal()"><i class="fas fa-shopping-bag" aria-hidden="true" style="margin-right: 10px;"></i>Cotizar</button>
                               
                                
                        </div>
                        <div class="spinner-border text-warning cargando-producto" role="status">
                            <span class="sr-only">Loading...</span>
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
                        <div class="url-cotizacion">
                            <a href="{{ route('cotizacion') }}" class="added_to_cart wc-forward" title="Ver carrito">Ver solicitud de cotización</a>
                        </div>
                            <!-- <div class="product-share">
                                <div class="share-links"><a
                                        href="https://www.facebook.com/sharer.php?u=https://vanni.cl/producto/caja-para-sushi-grande/"
                                        target="_blank" rel="noopener noreferrer nofollow" data-bs-tooltip=""
                                        data-bs-placement="bottom" title="Facebook" class="share-facebook">Facebook</a>
                                    <a href="https://twitter.com/intent/tweet?text=Caja+para+Sushi+Grande&amp;url=https://vanni.cl/producto/caja-para-sushi-grande/"
                                        target="_blank" rel="noopener noreferrer nofollow" data-bs-tooltip=""
                                        data-bs-placement="bottom" title="Twitter" class="share-twitter">Twitter</a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://vanni.cl/producto/caja-para-sushi-grande/&amp;title=Caja+para+Sushi+Grande"
                                        target="_blank" rel="noopener noreferrer nofollow" data-bs-tooltip=""
                                        data-bs-placement="bottom" title="LinkedIn" class="share-linkedin">LinkedIn</a>
                                    <a href="mailto:?subject=Caja+para+Sushi+Grande&amp;body=https://vanni.cl/producto/caja-para-sushi-grande/"
                                        target="_blank" rel="noopener noreferrer nofollow" data-bs-tooltip=""
                                        data-bs-placement="bottom" title="Email" class="share-email">Email</a>
                                    <a href="whatsapp://send?text=Caja%20para%20Sushi%20Grande - https://vanni.cl/producto/caja-para-sushi-grande/"
                                        data-action="share/whatsapp/share" rel="noopener noreferrer nofollow"
                                        data-bs-tooltip="" data-bs-placement="bottom" title="WhatsApp"
                                        class="share-whatsapp" style="display:none">WhatsApp</a>
                                </div>
                            </div> -->
                            <section class="mb-4 botones-redes">
                                <!-- Facebook -->
                                <a class="btn btn-outline-light btn-floating m-1 facebook" href="https://www.facebook.com/envases.vyp" role="button"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>

                                <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1 twitter" href="#!" role="button"><i class="fab fa-twitter" aria-hidden="true"></i></a>

                                <!-- Google -->
                                <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a> -->

                                <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1 instagram" href="#!" role="button"><i class="fab fa-instagram" aria-hidden="true"></i></a>

                                <!-- Linkedin -->
                                <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                        class="fab fa-linkedin-in"></i></a> -->

                                <!-- Github -->
                                <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a> -->
                            </section>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cerrar-modal" data-dismiss="modal" style="background-color: #FC0;">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $( ".cerrar-modal" ).click(function() {
        console.log("aqui");
        $('#exampleModalCenter').modal('hide');
    });
</script>