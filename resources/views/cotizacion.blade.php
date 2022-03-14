@extends('layout.app')

@section('contenido')
<div class="container">
    <div class="vc_message_box vc_message_box-standard vc_message_box-rounded vc_color-warning">
        <div class="vc_message_box-icon">
            <i class="fas fa-info-circle"></i>
        </div>
        <p><span style="font-size: 18px; color: #222529;"><strong>Recuerde que</strong> el mínimo de unidades por
                artículo, está definido por el formato de venta, que se detalla en la descripción del
                producto.&nbsp;<strong> Está segur@ de la cantidad seleccionada?</strong></span></p>
    </div>
    <div class="vc_row wpb_row row">
        <div class="vc_column_container col-md-12">
            <div class="wpb_wrapper vc_column-inner">
                <div class="woocommerce">
                    <div class="cart-empty-page text-center">
                        <div class="woocommerce-notices-wrapper"></div>
                        <i class="bi bi-basket2"></i>
                        <p class="px-3 py-2 cart-empty">No se ha añadido ningún producto a la cesta</p>
                        <p class="return-to-shop">
                            <a class="button wc-backward btn-v-dark btn-go-shop" href="{{asset('productos')}}">
                                Volver a la tienda </a>
                        </p>
                    </div>
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="cart-v2">
                        <div class="row mb-5 pb-2">
                            <div class="col-lg-8">
                                <div class="align-left">
                                    <div class="box-content">
                                        <form class="woocommerce-cart-form" action="https://vanni.cl/cotizacion/"
                                            method="post">
                                            <table
                                                class="shop_table responsive cart cart-table woocommerce-cart-form__contents"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">&nbsp;</th>
                                                        <th class="product-name"><span>Product</span></th>
                                                        <th class="product-price"><span>Price</span></th>
                                                        <th class="product-quantity"><span>Quantity</span></th>
                                                        <th class="product-subtotal text-center text-md-right">
                                                            <span>Subtotal</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="productosTabla">
                                                </tbody>
                                            </table>

                                            <div class="cart-actions">
                                            </div>
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">


                                <div class="cart-collaterals">

                                    <div class="cart_totals">
                                        <div class="cart_totals_toggle">
                                            <div class="card card-default">
                                                <h4 class="card-sub-title text-md m-b-md pb-1">COTIZACIÓN</h4>
                                                <div id="panel-cart-total">
                                                    <div class="card-body p-0">
                                                        <table class="responsive cart-total" cellspacing="0">
                                                            <tbody>
                                                                <tr class="cart-subtotal" style="display: none;">
                                                                    <th>
                                                                        <h4 class="mb-0">Subtotal</h4>
                                                                    </th>
                                                                    <td><span class="woocommerce-Price-amount amount"
                                                                            style="display: none !important"><bdi><span
                                                                                    class="woocommerce-Price-currencySymbol">$</span>64.800</bdi></span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="border-bottom-0">
                                                                    <th colspan="2"></th>
                                                                </tr>


                                                                <tr class="tax-rate tax-rate-iva-1"
                                                                    style="display: none;">
                                                                    <th>IVA</th>
                                                                    <td data-title="IVA"><span
                                                                            class="woocommerce-Price-amount amount"
                                                                            style="display: none !important"><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>12.312</span>
                                                                    </td>
                                                                </tr>

                                                                <tr class="order-total" style="display: none;">
                                                                    <th>
                                                                        <h4 class="text-md mb-0">Total</h4>
                                                                    </th>
                                                                    <td><strong><span
                                                                                class="woocommerce-Price-amount amount"
                                                                                style="display: none !important"><bdi><span
                                                                                        class="woocommerce-Price-currencySymbol">$</span>77.112</bdi></span></strong>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="wc-proceed-to-checkout">
                                                            <a href="{{asset('solicitud-de-cotizacion')}}"
                                                                class="btn btn-v-dark w-100 m-t-lg py-3" id="botonCotizar">Cotizar<i
                                                                    class="vc_btn3-icon fas fa-arrow-right pl-3"></i></a>
                                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .vc_color-warning.vc_message_box {
        color: #9d8967;
        border-color: #ffeccc;
        background-color: #fff4e2;
    }

    .vc_message_box-rounded {
        border-radius: 5px;
    }

    .vc_message_box {
        border: 1px solid transparent;
        display: block;
        overflow: hidden;
        margin: 0 0 21.73913043px 0;
        padding: 1em 1em 1em 4em;
        position: relative;
        font-size: 1em;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .vc_color-warning.vc_message_box .vc_message_box-icon {
        color: #fcb53f;
    }

    .vc_message_box-icon {
        bottom: 0;
        font-size: 1em;
        font-style: normal;
        left: 0;
        position: absolute;
        top: 0;
        width: 4em;
    }

    .fas {
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    .fa,
    .fas,
    .far,
    .fal,
    .fad,
    .fab {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
    }

    .vc_message_box-icon>* {
        font-size: 1.7em;
        line-height: 1;
        font-style: normal;
        left: 50%;
        position: absolute;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .text-center {
        text-align: center !important;
    }

    .bi-basket2 {
        font-size: 100px;
        color: #d3d3d4;
    }

    .px-3 {
        padding-left: 1rem !important;
    }

    .return-to-shop {
        margin: 0 0 1.25rem;
    }

    .btn-v-dark {
        color: #fff;
        background-color: #222529;
        border: none;
    }

    .btn-v-dark {
        font-weight: 700;
        text-transform: uppercase;
    }

    .btn-go-shop {
        min-width: 200px;
        padding: 16px 16px;
        font-size: 15px;
        letter-spacing: -.015em;
        text-align: center;
    }

    .box-content {
        margin-top: -60px;
    }
    .align-left {
        text-align: left;
    }

    .shop_table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        margin-bottom: 1em;
    }

    .shop_table tr:not(:last-child) {
        border-bottom: 1px solid #e7e7e7;
    }

    .shop_table thead tr {
        border-bottom: 1px solid #e7e7e7;
    }

    .shop_table.cart-table th.product-thumbnail {
        width: 16%;
    }

    .shop_table th {
        display: none !important;
    }

    .shop_table th {
        text-align: left;
        padding: 10px;
    }

    .shop_table th {
        text-align: left;
        padding: 10px;
    }

    .shop_table th {
        display: none !important;
    }

    .shop_table th {
        padding: 10px;
    }

    .shop_table td {
        text-align: left;
        padding: 20px 10px;
    }

    .shop_table.cart-table .product-thumbnail>div {
        width: 80px;
    }

    .shop_table a {
        color: #777;
        text-decoration: none;
    }

    .shop_table.cart-table a.remove.remove-product {
        top: -10px;
        right: -10px;
    }

    .shop_table.cart-table a.remove.remove-product {
        z-index: 3;
        text-align: center;
        font-size: 11px;
        top: -6px;
        width: 20px;
        height: 20px;
        line-height: 20px;
        background-color: #fff;
        color: #222529;
        border-radius: 50%;
        box-shadow: 0 2px 6px 0 rgb(0 0 0 / 40%);
    }

    .shop_table.cart-table a.remove {
        padding: 0;
        text-decoration: none;
    }

    .shop_table.cart-table a.remove:before {
        content: "";
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    .shop_table tbody td.product-name {
        font-weight: 500;
        word-break: break-word;
    }

    .shop_table td.product-name {
        color: #ffcc00;
    }

    .shop_table a {
        text-decoration: none;
    }

    .text-v-dark {
        color: #222529 !important;
    }

    .font-weight-medium {
        font-weight: 500;
    }

    td.product-price {
        font-weight: 400 !important;
    }

    td.product-price {
        color: inherit;
        font-size: inherit;
        line-height: inherit;
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

    .cart-v2 .card.card-default {
        padding: 24px 30px;
        border: 2px solid #e7e7e7;
    }
    .card {
        position: relative;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0;
    }

    .woocommerce-cart .card-sub-title{
        font-weight: 700;
    }
    .woocommerce-cart h4{
        letter-spacing: -.01em;
    }
    .m-b-md {
        margin-bottom: 20px !important;
    }
    .text-md {
        font-size: 1rem !important;
    }
    table {
        width: 100%;
    }

    .card-body>*:last-child {
        margin-bottom: 0;
    }
    .wc-proceed-to-checkout {
        text-align: left;
    }

    @media (max-width: 767px){
        .shop_table.responsive tr:first-child {
        border-top: none;
    }
    .shop_table.responsive tr {
        display: block;
        padding: 20px 0;
        position: relative;
    }
    .shop_table.responsive td, .shop_table.responsive th {
        background: transparent;
        text-align: center;
        display: block;
        padding: 5px 10px;
        border: none;
    }
    .shop_table.cart-table .product-thumbnail>div {
        margin: 0 auto;
    }
    }
</style>
<script>
    $(document).ready(function() {
        
    
        let cantidadCanasta = JSON.parse(localStorage.basket).length;
        if (cantidadCanasta > 0) {
            $(".cart-empty-page").css("display", "none");
            $(".woocommerce-notices-wrapper").css("display", "block");
            $(".cart-v2").css("display", "block");
            var productos = JSON.parse(localStorage.basket);
            var html = '';
            for(var i=0; i<productos.length; i++){
                console.log(productos[i]);
                var url = '{{ route("producto.fichaProducto", ":id") }}';
                url = url.replace(':id', productos[i].id_producto);
                var url_categoria = '{{ route("categoria", ":id") }}';
                url_categoria = url_categoria.replace(':id', productos[i].elementId_tipo);
                // html += '<tr class="cart_item_'+i+'">'         
                // html += '<td class="product-thumbnail">'
                // html += '<div class="oculto_id_'+i+' '+productos[i].elementId+'" style="display:none">'+productos[i].elementId+'</div>';  
                // html += '<div class="position-relative">'
                // html += '<a href="'+url+'">'
                // html += '<img width="200" height="200" alt="'+productos[i].elementName+'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" src="'+productos[i].elementimageUrl+'"></a>';
                // html += '<a onclick="eliminarItem('+i+','+productos[i].elementId+', '+productos[i].elementId_tipo+')" class="remove remove-product position-absolute" aria-label="Remove this item"></a>';
                // html+= '</div></td>';
                // html += '<td class="product-name"><a href="'+url+'" class="text-v-dark font-weight-medium">'+productos[i].elementName+'</a></td>';
                // html += ' <td class="product-price">
                // <span class="woocommerce-Price-amount amount" 
                // style="display: none !important">
                // <div>
                // <span class="woocommerce-Price-currencySymbol">$</span>64.800</bdi></span></td>
                // <td class="product-quantity">
                // <form class="form-inline" style="margin:0px"><div class="quantity" style="width: 220px;"><input type="button" value="-" class="minus_'+i+'" field="quantity__'+i+'" onclick="minimo('+i+', '+productos[i].elementId+')" /><input type="text" name="quantity_'+i+'" id="quantity_'+i+'" value="'+productos[i].elementQuantity+'" class="qty" onkeyup="ActualizarCantidad('+i+')" /><input type="button" value="+" class="plus_'+i+'" field="quantity" onclick="maximo('+i+')"/></div></form></td><td class="product-subtotal text-center text-md-right" data-title="Subtotal"><span class="woocommerce-Price-amount amount" style="display: none !important"><bdi><span class="woocommerce-Price-currencySymbol">$</span>64.800</bdi></span></td></tr>';
                html += `<tr class="cart_item_${productos[i].elementId_tipo}">`; 
                html += `<td class="product-thumbnail">`;
                html += `<div class="oculto_id_${productos[i].elementId_tipo} ${productos[i].id_producto}" style="display:none">${productos[i].id_producto}</div>`;
                html += `<div class="position-relative">`;  
                html += `<a href=${url}>`;
                html += `<img width="200" height="200" alt="${productos[i].elementName}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" src="${productos[i].elementimageUrl}"></a>`;
                html += `<a onclick="eliminarItem(${productos[i].elementId_tipo},${productos[i].id_producto}, '${productos[i].elementId_tipo}')" class="remove remove-product position-absolute" aria-label="Remove this item"></a>`;
                html+= '</div></td><td class="product-name">';
                html+= `<a href="${url}" class="text-v-dark font-weight-medium">${productos[i].elementName}</a>`;
                html+= `<td class="product-price"><span class="woocommerce-Price-amount amount" style="display: none !important"><div><span class="woocommerce-Price-currencySymbol">$</span>64.800</bdi></span></td><td class="product-quantity">`;
                html+= `<form class="form-inline" style="margin:0px">`;
                html+= `<div class="quantity" style="width: 220px;">`;
                html+= `<input type="button" value="-" class="minus_${productos[i].elementId_tipo}" field="quantity__${productos[i].elementId_tipo}" onclick="minus(); actualizarMinimo('${productos[i].elementId_tipo}')" />`;
                html +=`<input type="text" name="quantity_${productos[i].elementId_tipo}" id="quantity_${productos[i].elementId_tipo}" value="${productos[i].cantidad}" class="qty" onkeyup="ActualizarCantidad('${productos[i].elementId_tipo}')" />`;
                html += `<input type="button" value="+" class="plus_${productos[i].elementId_tipo}" field="quantity" onclick="plus(); actualizarMaximo('${productos[i].elementId_tipo}')"/>`;
                html +=`</div></form></td><td class="product-subtotal text-center text-md-right" data-title="Subtotal"><span class="woocommerce-Price-amount amount" style="display: none !important"><bdi><span class="woocommerce-Price-currencySymbol">$</span>64.800</bdi></span></td></tr>`;
            }
            
            $('tbody#productosTabla:last-child').append(html);
        } else {
            $(".cart-empty-page").css("display", "block");
            $(".woocommerce-notices-wrapper").css("display", "none");
            $(".cart-v2").css("display", "none");
        }
    });

    function ActualizarCantidad(id) {
        var elementId_tipo = id;
            // e.preventDefault();
            // Define field variable
            field = $("#quantity_" +id);
            // Get its current value
            var currentVal = parseInt($(field).val());


            let basket = JSON.parse(localStorage.getItem('basket')); 

            if (!basket) {
                basket = [];
            }

        //console.log("1");
        // find the index of the item if already in basket
  
        const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId_tipo === elementId_tipo);
        console.log(itemIndexInBasket);
        if (itemIndexInBasket !== -1) {
            var newCantidad = $("#quantity_"+elementId_tipo).val();
            basket[itemIndexInBasket].cantidad = newCantidad;
        }
        localStorage.setItem('basket', JSON.stringify(basket));
        // localStorage.setItem('basket', JSON.stringify(basket));
        add_cart();
    }

    // This button will decrement the value till 0
    function actualizarMinimo(elementId){
        var elementId_tipo = elementId;
            // e.preventDefault();
            // Define field variable
            field = $("#quantity_" +elementId);
            // Get its current value
            var currentVal = parseInt($(field).val());


            let basket = JSON.parse(localStorage.getItem('basket')); 

            if (!basket) {
                basket = [];
            }

        //console.log("1");
        // find the index of the item if already in basket
  
        const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId_tipo === elementId_tipo);
        console.log(itemIndexInBasket);
        if (itemIndexInBasket !== -1) {
            basket[itemIndexInBasket].cantidad = currentVal;
        }
        localStorage.setItem('basket', JSON.stringify(basket));
        // localStorage.setItem('basket', JSON.stringify(basket));
        add_cart();
     }

        function actualizarMaximo(elementId){
        
        var elementId_tipo = elementId;
            // e.preventDefault();
            // Define field variable
            field = $("#quantity_" +elementId);
            // Get its current value
            var currentVal = parseInt($(field).val());


            let basket = JSON.parse(localStorage.getItem('basket')); 

            if (!basket) {
                basket = [];
            }

        //console.log("1");
        // find the index of the item if already in basket
  
        const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId_tipo === elementId_tipo);
        console.log(itemIndexInBasket);
        if (itemIndexInBasket !== -1) {
            basket[itemIndexInBasket].cantidad = currentVal;
        }
        localStorage.setItem('basket', JSON.stringify(basket));
        // localStorage.setItem('basket', JSON.stringify(basket));
        add_cart();
        }

        function irCotizar(){
            var resume_table = document.getElementById("productosTabla");

            for (var i = 0, row; row = resume_table.rows[i]; i++) {
                //alert(cell[i].innerText);
                for (var j = 0, col; col = row.cells[j]; j++) {
                    //alert(col[j].innerText);
                    console.log(`Txt: ${col.innerText} \tFila: ${i} \t Celda: ${j}`);
                }
            }
        }

    jQuery(document).ready(function(){
    // This button will increment the value
        $(".plus").click( function(e) {

            e.preventDefault();
            
            // Define field variable
            field = "input[name=" + $(this).attr("field") + "]";
            
            // Get its current value
            var currentVal = parseInt($(field).val());
            
            // If is not undefined
            if ( !isNaN(currentVal) && currentVal < 20 ) {

                // Increment
                $(field).val(currentVal + 1);

            }
            
        });

        $(".minus").click( function(e) {

            e.preventDefault();
            //console.log($(this).attr("field"))
            // Define field variable
            field = "input[name=" + $(this).attr("field") + "]";
            
            // Get its current value
            var currentVal = parseInt($(field).val());
            
            // If it isn't undefined or its greater than 0
            if ( !isNaN(currentVal) && currentVal > 1 ) {
                // Decrement one
                $(field).val(currentVal - 1);
            }
            
        });
    });

</script>
@endsection