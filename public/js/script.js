// (function(){
 
//     $("#cart").on("click", function() {
//         $(".shopping-cart").fadeToggle( "fast");
//         $(".container-tarjeta").addClass('mt-6');
//     });

// })();

// var basket = [];
// function cotizar(){
//     console.log("hola");
//     var cantidad = $(".qty").val();
//     var id_producto = $("#id_producto").val();
//     let carro = JSON.parse(localStorage.getItem('carro'));   // Parse data from localstorage
//                                                                // element.imageUrl is a part of backend data received from JSON file
//                                                             // element.price is a part of backend data received from JSON file
    

//     if (!basket) {
//         basket = [];
//     }
//     var tipo = $("#select_tipo").val();
//     if(tipo != ""){
//         var elementId_tipo = id_producto+"_"+tipo; 
//     }
//     var elementName = $("#modal_nombre_producto").html();
//     var elementimageUrl =  $("#modal_imagen_producto").attr("src");
//     var elementUrl =  $("#modal_nombre_producto").attr("href");
//     // console.log(id_producto);
//     // console.log(elementName);
//     // console.log(cantidad);
//     // console.log(elementimageUrl);
//     // console.log(elementUrl);
//     // console.log(elementId_tipo);
//     // console.log(tipo);
//     // find the index of the item if already in basket
//     var tipo_text = $( "#select_tipo option:selected" ).text();
//     const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId_tipo === elementId_tipo);
//     if (itemIndexInBasket !== -1) {
//         basket[itemIndexInBasket].cantidad = cantidad + parseInt(basket[
//             itemIndexInBasket].cantidad);
//     } else {
//     basket.push({id_producto, elementName, cantidad, elementimageUrl, elementUrl, elementId_tipo, tipo, tipo_text});    // Push not existing data to localstorage
//     } 
//     localStorage.setItem('basket', JSON.stringify(basket));
//     // console.log(JSON.parse(localStorage.getItem('basket')));
//     $(".qty").val("");
//     add_cart();
// }

// function plus(){
//     $(".qty").val(parseInt($(".qty").val())+1)
// }
  
// function minus(){
//     if($(".qty").val() != 1){
//         $(".qty").val(parseInt($(".qty").val())-1);
//     }
    
// }

// function cotizacion(){
//     var cart = JSON.parse(localStorage.getItem('basket'));
//     var html = "";
//     $(".tabla_cotizacion").html('');
//     $("#empaty_product").css("display", "none");
//     if (cart != null) {
  
        
//         // $("#badge_cantidad").html(cart.length);
//         // $("#cart__total").html(cart.length);
//         for (var i = 0; i < cart.length; i++) {
//             html += `<tr class="cart_item">
//             <td class="product-thumbnail">
//                 <div class="position-relative"> <a
//                         href="https://vanni.cl/producto/caja-para-sushi-grande/"><img
//                             width="300" height="300"
//                             alt="caja-para-sushi-ag-grande"
//                             data-src="${cart[i].elementimageUrl}"
//                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded"
//                             src="${cart[i].elementimageUrl}">
//                         <noscript><img width="300"
//                                 height="300"
//                                 src="${cart[i].elementimageUrl}"
//                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
//                                 alt="caja-para-sushi-ag-grande" /></noscript>
//                     </a><a
//                         href="https://vanni.cl/cotizacion/?remove_item=057780a9e2f50918c3f2e1f3151e26b4&amp;_wpnonce=a47e2ec231"
//                         class="remove remove-product position-absolute"
//                         aria-label="Remove this item"
//                         data-product_id="23599"
//                         data-product_sku="511.561"
//                         data-cart_id="057780a9e2f50918c3f2e1f3151e26b4"><i class="fas fa-times"></i></a>
//                 </div>
//             </td>
//             <td class="product-name"> <a
//                     href="https://vanni.cl/producto/caja-para-sushi-grande/">${cart[i].elementName}</a> </td>
//             <td class="product-price"> <span
//                     class="woocommerce-Price-amount amount"
//                     style="display: none !important"><bdi><span
//                             class="woocommerce-Price-currencySymbol">$</span>36.450</bdi></span>
//             </td>
//             <td class="product-quantity">
//                 <div class="quantity buttons_added">
//                     <button type="button" value="-"
//                         class="minus">-</button>
//                     <input type="number"
//                         id="quantity_61d11893eb60d"
//                         class="input-text qty text"
//                         step="1" min="0" max=""
//                         name="cart[057780a9e2f50918c3f2e1f3151e26b4][qty]"
//                         value="${cart[i].cantidad}" title="Cantidad"
//                         size="4" placeholder=""
//                         inputmode="numeric"> <button
//                         type="button" value="+"
//                         class="plus">+</button>
//                 </div>
//             </td>
//             <td class="product-subtotal text-center text-md-right"
//                 data-title="Subtotal"> <span
//                     class="woocommerce-Price-amount amount"
//                     style="display: none !important"><bdi><span
//                             class="woocommerce-Price-currencySymbol">$</span>36.450</bdi></span>
//             </td>
//         </tr>`;
//         }
//         html += `<tr>
//         <td colspan="6" class="actions px-md-2">
//             <input type="hidden"
//                 id="woocommerce-cart-nonce"
//                 name="woocommerce-cart-nonce"
//                 value="a47e2ec231"><input
//                 type="hidden"
//                 name="_wp_http_referer"
//                 value="/cotizacion/"> </td>
//     </tr>`;
//         $(".tabla_cotizacion").html(html);
//         $(".tabla_cotizacion").css("display", 'block');
//     }else{
//         $("#empaty_product").css("display", "block");
//         $(".tabla_cotizacion").css("display", 'none');
//     }

//     // console.log(JSON.parse(localStorage.getItem('basket')));
// }

// function solicitudCotizacion(){
//     var cart = JSON.parse(localStorage.getItem('basket'));
//     console.log(cart)
//     var html = "";
//     $("#tabla_solicitud_cotizacion").html('');
//     $("#empaty_product").css("display", "none");
//     if (cart != null) {
//         // $("#badge_cantidad").html(cart.length);
//         // $("#cart__total").html(cart.length);
//         for (var i = 0; i < cart.length; i++) {
//             html += ` <tr class="border-bottom-0 cart_item">
//             <td class="product-name line-height-sm">${cart[i].elementName} - ${cart[i].tipo_text} <strong
//                     class="product-quantity font-weight-medium">×&nbsp;${cart[i].cantidad}</strong>
//             </td>
//             <td class="product-total">
//                 <span
//                     class="woocommerce-Price-amount amount"><bdi><span
//                             class="woocommerce-Price-currencySymbol"></span></bdi></span>
//             </td>
//         </tr>`;
//         }
//         $("#tabla_solicitud_cotizacion").html(html);
//         $(".tabla_cotizacion").css("display", 'block');
//     }else{
//         $(".empaty-product").css("display, block");
//         $(".tabla_cotizacion").css("display", 'none');
//     }

//     // console.log(JSON.parse(localStorage.getItem('basket')));
// }
