<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('vendors\jquery.min.js')}}"></script>
<script src="{{asset('owlcarousel\owl.carousel.js')}}"></script>
<script src="{{asset('js\index.js')}}"></script>
<script src="{{asset('js\modal-agregarProducto.js')}}"></script>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="{{ asset('/js/products.js') }}"></script>
<script src="{{ asset('/js/index.js') }}"></script>
<script src="{{ asset('/js/slider.js') }}"></script>
<script>
  (function(){
 
 $("#cart").on("click", function() {
   
     console.log($(".shopping-cart").css('display'));
     if($( window ).width() < 1519){

        if($(".shopping-cart").css('display') == 'none'){
     
        $(".container-tarjeta").removeClass('mt-5');
            $(".container-tarjeta").addClass('mt-6');
        }else{
            $(".container-tarjeta").addClass('mt-5');
            $(".container-tarjeta").removeClass('mt-6');
        }
     }
    //  782

     $(".shopping-cart").fadeToggle( "fast");
 });

})();
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      "<i class='fa fa-caret-left'></i>",
      "<i class='fa fa-caret-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })
</script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
  function add_cart() {
    // window.localStorage.clear();

    var cart = JSON.parse(localStorage.getItem('basket'));
    var html = "";
    $(".shopping-cart-items").html('');
    if (cart != null) {
        $("#badge_cantidad").html(cart.length);
        $("#cart__total").html(cart.length);
        for (var i = 0; i < cart.length; i++) {
            html += ` <li class="clearfix">`;
            html += `<div class="u-avatar mr-3">`;
            html += `    <img class="img-fluid rounded"`;
            html += `        src="${cart[i].elementimageUrl}"`;
            html += `        alt="Image Description" width="100px">`;
            html += `</div>`;
            html += `<div class="media-body">`;
            html += `    <div class="d-flex justify-content-between align-items-center">`;
            html +=
                `        <span class="d-block font-weight-semi-bold text-product" id="nombre_productos">${cart[i].elementName}</span>`;
            html +=
                `         <button type="button" class="close" aria-label="Close" onclick="eliminarItem(${i},${cart[i].id_producto}, '${cart[i].elementId_tipo}');">`;
            html += `            <span aria-hidden="true">×</span>`;
            html += `        </button>`;

            html += `    </div>`;
            html += `    <div class="d-flex justify-content-between" style="flex-direction: column;">`;
            html += `        <small class="d-block text-muted  text-product">Tipo: ${cart[i].tipo_text}</small>` ;
            console.log(cart[i].medida_text);
            if(cart[i].medida_text != null && cart[i].medida_text.trim() != ""){
                html += `<small class="d-block text-muted  text-product">Medida: ${cart[i].medida_text}</small>`;
            }
            if(!cart[i].color == false){
                html += `<small class="d-block text-muted  text-product">Color: ${cart[i].color_text}</small>`;
            }
            html +=
                `        <span class="d-block text-primary font-weight-semi-bold  text-product">Cantidad: ${cart[i].cantidad}</span>`;
            html += `    </div>`;
            html += `</div>`;
            html += `</li>`;
        }
        html += `<div><a href="{{route('cotizacion')}}" class="btn btn-cotizar add-to-cart"><i class="fas fa-shopping-bag" aria-hidden="true" style="margin-right: 10px;"></i> Cotizar</a></div>`;
        $(".shopping-cart-items").html(html);
    }

    console.log(JSON.parse(localStorage.getItem('basket')));
}
$(document).ready(function(){
    // localStorage.clear();
    $("a#modal").css("display","none");
    obtenerproductos(cantidad());
    htmlPaginacion();
    var clase = '.num-pag-'+1;
    $(clase).addClass( "active" );
    obtenerproductosCategoria(cantidad(),$("#id_categoria").val());
    htmlPaginacionCategoria();
    var clase = '.num-pag-'+1;
    $(clase).addClass( "active" );
    add_cart();
});

</script>
<script>
var basket = [];

function enviarDatosModal(id,imgen){
    $('.qty').val(0);
    $("#tipoProducto").css("display", "none");
    $("#tipoProducto").html("");
    let data = new Object();
	data.id = id;

    $.ajax({
            type: "GET",
            url: "{{route('producto.detalleProducto')}}",
            data: data
        }).done(function(resp){
            var urlresp = resp.mensaje[0].url;
            var url = "{{asset('')}}producto/"+id+"/"+resp.mensaje[0].url;
            $(".nombreP" ).text(resp.mensaje[0].nombre);
            // $(".descripcionP" ).html(descripcionP);
            $(".cantidadP" ).html(resp.mensaje[0].unidades);
            // $(".skuP" ).html(skuP);
            $(".imagen-producto").attr("src",imgen);
            $(".nombreP").attr('href',url);
            $(".tipo").text(resp.mensaje[0].nombre_tipo)
            $(".medidasP").html(resp.mensaje[0].medidas)
            $("#elementId").val(id);
            $("#elementName").val(resp.mensaje[0].nombre);
            $("#elementimageUrl").val(imgen);
            $("#linkTipo").attr("href", "{{asset('categoria-producto')}}/"+resp.mensaje[0].id_tipo+"");
            $("#elementUrl").val(url);
            datoTipo();
        }).fail(function(objeto, tipoError, errorHttp){
        
            return false;
        });
}

function datoTipo(){
    
    var id = parseInt($("#elementId").val());

    let data = new Object();
	data.id = id;

    $.ajax({
            type: "GET",
            url: "{{route('getModelo')}}",
            data: data
        }).done(function(resp){
            if(resp.length > 0){
                var html = ''
                html += 'Tipos  <select class="form-control" id="select-tipo"><option value="">Seleccione tipo</option>';
                for(var i = 0; i < resp.length; i++){
                    html += '<option value="'+resp[i].id_modelo+'">'+resp[i].nombre_modelo+'</option>';
                }
                html += '</select>';
                $("#tipoProducto").html(html);
                $("#tipoProducto").css("display", "block");
            }else{
                $("#tipoProducto").css("display", "none");
            }
        }).fail(function(objeto, tipoError, errorHttp){
        
            return false;
        });
}

function obtenerproductos(data = null) {
    let datos = new Object();
    datos.between = data;

    $.ajax({
        url: "{{ route('get.productos') }}",
        type: "GET",
        data: datos
    }).done(function(resp) {
      console.log(resp);
        $(".list_productos").html('');
        let html = '';
        // var style = '<style>';
            for (var i = 0; i < resp.productos.length; i++) {
              var urlimagen = "{{asset('imagenes/Productos')}}/" + resp.productos[i].url_categoria +
                        "/" +
                        resp
                        .productos[i].url;
                var url = '{{ route("producto.fichaProducto", ":id") }}';
                url = url.replace(':id', resp.productos[i].id_imagen);
                var url_categoria = '{{ route("categoria", ":id") }}';
                url_categoria = url_categoria.replace(':id', resp.productos[i].id_categoria);
                html +=`     <div class="col-md-4 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="${url}" class="image">
                                <img
                                    src="${urlimagen}">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" onclick="abrirModal(${resp.productos[i].id_imagen})"><i class="fas fa-share-square"></i></a></li>
                            </ul>
                            <a href="${url}" class="add-to-cart"  ><i class="fas fa-shopping-bag" aria-hidden="true" style="margin-right: 10px;"></i> Cotizar</a>
                        </div>
                        <div class="product-content">
                          <div class="price"><span class="category-list"><a href="${url_categoria}">${resp.productos[i].nombre_categoria}</a></span></div>
                            <h3 class="title-producto title"><a class="title-producto title "  href="${url}">${resp.productos[i].nombre_producto}</a></h3>
                           
                        </div>
                    </div>
                </div>`;
            }
        $(".list_productos").html(html);
        
    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}




function htmlPaginacion(){
    var cantidad_productos = $("#cantidad").val();
        var cantidad_paginacion = cantidad_productos / parseInt($(".count").val());
        var paginacion = '';
        paginacion += ` <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>`;

        for (var i = 0; i < cantidad_paginacion; i++) {
            if (validarPaginacion(i) < cantidad_productos) {
                paginacion += `<li class="page-item num-pag-${i+1}"><a class="page-link" onclick="paginacion(${i+1})">${i+1}</a></li> `;
            }

        }

        $(".num-pag-1").addClass('active');
        paginacion += `  <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>`;
        $(".pagination").html(paginacion);
}

function validarPaginacion(data) {
    let inicio = data - 1;

    inicio = inicio * (parseInt($(".count").val()) + 1);

    var num = Array.from({
        length: parseInt($(".count").val()) + 1
    }, (f, g) => g + inicio);

    return num[parseInt($(".count").val())];
}

function cantidad() {
    var cantidad = parseInt($(".count").val());
    switch (cantidad) {
        case 12:
            return data = 'LIMIT 0, 12';
            break;
        case 24:
            return data = 'LIMIT 13,12';
            break;
        case 36:
            return data = 'LIMIT 25,12';
            break;
    }
}

function paginacion(data) {
    var clase = '.num-pag-'+data;
    let inicio = data - 1;

    inicio = inicio * (parseInt($(".count").val()) + 1);

    var num = Array.from({
        length: parseInt($(".count").val()) + 1
    }, (f, g) => g + inicio);

    var data = 'LIMIT ' + num[0] + ' , ' + parseInt($(".count").val());
    obtenerproductos(data);
    console.log(clase);
    $('.page-item').removeClass( "active" );
    $(clase).addClass( "active" );
}

$('.count').on('change', function() {
    var between = cantidad();
    obtenerproductos(between);
    htmlPaginacion();
});

function abrirModal(datos){
    $(".modal_embalaje_producto").html('');
    $(".modal_producto_categoria").html('');
    $("#modal_tipo").html('');
    $("#modal_medida").html('');
    $("#modal_color_text").html('');
    $("#modal_colores").html('');

    $(".url-cotizacion").css("display","none");
  
    let data = new Object();
    data.id_imagen = datos;
    console.log(data)
    $(".modal_id_producto").val(datos);
    $.ajax({
        url: "{{ route('get.producto') }}",
        type: "GET",
        data: data
    }).done(function(resp) {
        console.log(resp);
        $('#select_tipo').html('');
        $('.select_tipo').html('');
        $("#text-color").html('');
        $(".tipo").css('display', 'block');
        $(".tipo").html('');
        $('#exampleModalCenter').modal('show');

        $('.modal_nombre_producto').html(resp.producto[0].nombre_producto);

        var url = '{{ route("producto.fichaProducto", ":id") }}';
        url = url.replace(':id', datos);
        $(".modal_nombre_producto").attr("href", url);
        $(".modal_embalaje_producto").html(resp.producto[0].nombre_embalaje);

        var url_categoria = '';
        url_categoria = url_categoria.replace(':nombre_categoria', resp.producto[0].nombre_categoria);
        var html_categoria = 'Categorias: <a href="' + url_categoria + '" rel="tag">' + resp.producto[0]
            .nombre_categoria + '</a>'
        $(".modal_producto_categoria").html(html_categoria);

        var url_img = "{{asset('imagenes')}}/Productos/" + resp.producto[0].url_categoria + "/" + resp
            .producto[0].url;
        $(".modal_imagen_producto").attr("src", url_img);
        // console.log(resp.tipo.length);
        if(resp.tipo.length > 1){
            $(".tipo").append('Tipo: <select class="select_tipo_modal" onchange="obtenerDatosModal(this)"></select>');
            $('.select_tipo_modal').append($('<option>', {
                value: 0,
                text: 'Seleccione tipo'
            }));
            for (var i = 0; i < resp.tipo.length; i++) {
                $('.select_tipo_modal').append($('<option>', {
                    value: resp.tipo[i].id_tipo,
                    text: resp.tipo[i].nombre_tipo
                }));
            }
        }else{

            $(".tipo").append('Tipo: <select style="display:none" class="select_tipo_modal" onchange="obtenerDatosModal(this)"></select><a rel="tag" id="modal_ficha_medida" data-id="'+resp.tipo[0].id_tipo+'" >'+resp.tipo[0].nombre_tipo+'</a>');

            for (var i = 0; i < resp.tipo.length; i++) {
                $('.select_tipo_modal').append($('<option>', {
                    value: resp.tipo[i].id_tipo,
                    text: resp.tipo[i].nombre_tipo
                }));
                $(".select_tipo_modal option[value='"+resp.tipo[0].id_tipo+"']").attr("selected", true);
                obtenerproductosMedidasModal(datos, resp.tipo[0].id_tipo);
                obtenerproductosColoresModal(datos, resp.tipo[0].id_tipo);
                // obtenerproductosColores((datos, resp.tipo[i].id_tipo));

            }
            $(".tipo").css('display', 'block');
        }
     

        $(".modal_producto").modal('show');

    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}

function plus(){
    $(".qty").val(parseInt($(".qty").val())+1)
}
  
function minus(){
    if($(".qty").val() != 1){
        $(".qty").val(parseInt($(".qty").val())-1);
    }
    
}

function obtenerproductosCategoria(data = null, id_categoria) {
    let datos = new Object();
    datos.id_categoria =  id_categoria;
    datos.limit = data;
    $.ajax({
        url: "{{ route('get.productos.categoria') }}",
        type: "GET",
        data: datos
    }).done(function(resp) {
      console.log(resp);
        $(".list_productos_categoria").html('');
        let html = '';
        // var style = '<style>';
            for (var i = 0; i < resp.productos.length; i++) {
                var urlimagen = "{{asset('imagenes/Productos')}}/" + resp.productos[i].url_categoria +
                        "/" +
                        resp
                        .productos[i].url;
                var url = '{{ route("producto.fichaProducto", ":id") }}';
                url = url.replace(':id', resp.productos[i].id_imagen);
                var url_categoria = '{{ route("categoria", ":id") }}';
                url_categoria = url_categoria.replace(':id', resp.productos[i].id_categoria);
                html +=`     <div class="col-md-4 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="${url}" class="image">
                                <img
                                    src="${urlimagen}">
                            </a>
                            <ul class="product-links">
                                <li><a href="#" onclick="abrirModal(${resp.productos[i].id_imagen})"><i class="fas fa-share-square"></i></a></li>
                            </ul>
                            <a href="${url}" class="add-to-cart"  >Cotizar</a>
                        </div>
                        <div class="product-content">
                          <div class="price"><span class="category-list"><a href="${url_categoria}">${resp.productos[i].nombre_categoria}</a></span></div>
                            <h3 class="title-producto title"><a class="title-producto title "  href="${url}">${resp.productos[i].nombre_producto}</a></h3>
                           
                        </div>
                    </div>
                </div>`;
            }
        $(".list_productos_categoria").html(html);
        
    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}

function htmlPaginacionCategoria(){
    var cantidad_productos = $("#cantidad").val();
        var cantidad_paginacion = cantidad_productos / parseInt($(".count").val());
        var paginacion = '';
        paginacion += ` <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>`;

        for (var i = 0; i < cantidad_paginacion; i++) {
            if (validarPaginacion(i) < cantidad_productos) {
                paginacion += `<li class="page-item num-pag-${i+1}"><a class="page-link" onclick="paginacion_cotizacion(${i+1})">${i+1}</a></li> `;
            }

        }

        $(".num-pag-1").addClass('active');
        paginacion += `  <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>`;
        $(".paginacion_cotizacion").html(paginacion);
}


function paginacion_cotizacion(){
    var clase = '.num-pag-'+data;
    let inicio = data - 1;

    inicio = inicio * (parseInt($(".count").val()) + 1);

    var num = Array.from({
        length: parseInt($(".count").val()) + 1
    }, (f, g) => g + inicio);

    var data = 'LIMIT ' + num[0] + ' , ' + parseInt($(".count").val());
    obtenerproductosCategoria(cantidad(),$("#id_categoria").val());
    console.log(clase);
    $('.page-item').removeClass( "active" );
    $(clase).addClass( "active" );
}

$( ".cerrar-modal" ).click(function() {
    $(".url-cotizacion").css("display","none");
    $('#exampleModalCenter').modal('hide');
});

function eliminarItem(id, idElemento, tipo = null) {
    // localStorage.clear();
    // console.log(idElemento);
    console.log(tipo);
    
    let basket = JSON.parse(localStorage.getItem('basket')); // Parse data from localstorage
    // element.imageUrl is a part of backend data received from JSON file
    // element.price is a part of backend data received from JSON file


    if (!basket) {
        basket = [];
    }
    console.log(basket);
    // find the index of the item if already in basket
    const itemIndexInBasket = basket.find(basketEntry => basketEntry.elementId_tipo === tipo.toString());
    console.log(itemIndexInBasket);
    if (itemIndexInBasket !== -1) {
        basket.splice(itemIndexInBasket, 1);
        localStorage.setItem('basket', JSON.stringify(basket));
    }
    localStorage.setItem('basket', JSON.stringify(basket));
    $(".cart_item_" + id).remove();
    $(".unseen-count").html(basket.length);
    $(".unseen-count").html(basket.length);
    if (basket.length == 0) {
        html = '<p>No hay productos en el carrito.</p>'
        $(".div-carrito-item").html(html);
    }
    add_cart();
}

function obtenerproductosMedidas(id_imagen, id_tipo) {
    $('#select_medidas').html('');
    $('.select_medidas').html('');
    let datos = new Object();
    datos.id_tipo =  id_tipo;
    datos.id_imagen = id_imagen;
    console.log(datos);
    $.ajax({
        url: "{{ route('get.medida.tipo') }}",
        type: "GET",
        data: datos
    }).done(function(resp) {
        $('#select_medidas').html('');
        $('.select_medidas').html('');
        if(resp.length > 1){
            $.each(resp, function (i, item) {
                $('#select_medidas').append($('<option>', { 
                    value: item.id_medida,
                    text : item.nombre_medida 
                }));
                
                $('#medidas').css('display', 'block');

                $('.select_medidas').append($('<option>', { 
                    value: item.id_medida,
                    text : item.nombre_medida 
                }));
                
                $('.medidas').css('display', 'block');
            });
        }else{
            $('#medidas').css('display', 'block');
            $("#medidas").html('Medidas:<select id="select_medidas" style="display:none"></select>  <a rel="tag" id="ficha_medida" data-id="'+resp[0].id_medida+'" >'+resp[0].nombre_medida+'</a>');
            
            $.each(resp, function (i, item) {
                $('#select_medidas').append($('<option>', { 
                    value: item.id_medida,
                    text : item.nombre_medida 
                }));
                

                $('.select_medidas').append($('<option>', { 
                    value: item.id_medida,
                    text : item.nombre_medida 
                }));
                
            });
            
            $(".medidas option[value='"+item.id_medida+"']").attr("selected", true);
            $("#medidas option[value='"+item.id_medida+"']").attr("selected", true);

            // $("#select_medidas").css('display', 'none');
            // $(".select_medidas").css('display', 'none');
            $("#medidas").css('display', 'block');
            $(".medidas").css('display', 'block');

        }
    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}

function obtenerproductosMedidasModal(id_imagen, id_tipo) {
    $('#modal_medida').html('');
    let datos = new Object();
    datos.id_tipo =  id_tipo;
    datos.id_imagen = id_imagen;
    console.log(datos);
    $.ajax({
        url: "{{ route('get.medida.tipo') }}",
        type: "GET",
        data: datos
    }).done(function(resp) {

        $('#modal_medida').html('');
        if(resp.length > 1){
            $('#modal_medida').html('Medidas:<select id="medida_modal"></select>');
            $.each(resp, function (i, item) {
                $('#medida_modal').append($('<option>', { 
                    value: item.id_medida,
                    text : item.nombre_medida 
                }));
                
                $('#modal_medida').css('display', 'block');

            });
        }else{
            $('#modal_medida').css('display', 'block');
           $('#modal_medida').html('Medidas:<select id="medida_modal" style="display:none"></select>  <a rel="tag" id="ficha_medida_modal" data-id="'+resp[0].id_medida+'" >'+resp[0].nombre_medida+'</a>');
            
            $.each(resp, function (i, item) {
                $('#medida_modal').append($('<option>', { 
                    value: item.id_medida,
                    text : item.nombre_medida 
                }));
                $("#medida_modaloption[value='"+item.id_medida+"']").attr("selected", true);
            });
            
           

           $('#modal_medida').css('display', 'block');


        }
    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}
function obtenerproductosColores(id_imagen, id_tipo) {
    let datos = new Object();
    datos.id_tipo =  id_tipo;
    datos.id_imagen = id_imagen;
    $.ajax({
        url: "{{ route('get.color.tipo') }}",
        type: "GET",
        data: datos
    }).done(function(resp) {
        $('#modal_colores').html('');
        if(resp.length > 0){
            var html = '';
            $.each(resp, function (i, item) {
                html += `<li data-color="${item.id_color}"  data-nombrecolor="${item.color}" style="background-color:${item.hex_code}" class="buton_color" onclick="animacionColores('color_${item.id_color }')" id="color_${item.id_color }"></li>`; 
            });

            $("#coloresModal").css('display', 'block');
            $('#modal_colores').html(html);
        }else{
            $("#coloresModal").css('display', 'none');
        }
    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}

function obtenerproductosColoresModal(id_imagen, id_tipo) {
    let datos = new Object();
    datos.id_tipo =  id_tipo;
    datos.id_imagen = id_imagen;
    console.log(datos);
    $.ajax({
        url: "{{ route('get.color.tipo') }}",
        type: "GET",
        data: datos
    }).done(function(resp) {
        $('#modal_colores').html('');
        if(resp.length > 0){
            var html = '';
            $.each(resp, function (i, item) {
                html += `<li data-color="${item.id_color}"  data-nombrecolor="${item.color}" style="background-color:${item.hex_code}" class="buton_color" onclick="animacionColores('color_${item.id_color }')" id="color_${item.id_color }"></li>`; 
            });

            $("#modal_colores").css('display', 'block');
            $('#modal_colores').html(html);
        }else{
            $("#modal_colores").css('display', 'none');
        }
    }).fail(function(obj) {
        console.log(obj);
        return false;
    });
}

$('#select_tipo').on('change', function() {
    obtenerproductosMedidas($("#id_producto").val(), $(this).val());
    obtenerproductosColores($("#id_producto").val(), $(this).val());
});

function obtenerDatos(select){
    obtenerproductosMedidas($(".id_producto").val(), select.value);
    obtenerproductosColores($(".id_producto").val(),  select.value);
}

function obtenerDatosModal(select){
    obtenerproductosMedidasModal($(".modal_id_producto").val(), select.value);
    obtenerproductosColoresModal($(".modal_id_producto").val(),  select.value);
}
	
function animacionColores(id){
   // Remove class from currently active button
		$(".colors > li").removeClass("active-color");
		
		// Add class active to clicked button
		$("#" + id).addClass("active-color");
		
		// Get background color of clicked
		var newColor = $("#" + id).attr("data-nombrecolor");
		
		console.log(newColor);
		// Change color of everything with class .text-color
		// $(".text-color").css("color", newColor);
        $(".text-color").html(newColor);
}

function validarCotizacionModal(){
    if($(".select_tipo").val() == 0 || $(".select_tipo").val() == null || $(".select_tipo").val() == undefined){
        alert('Debe seleccionar tipo');
        return false;
    }else if($(".select_medidas").val() == 0 || $(".select_medidas").val() == null || $(".select_medidas").val() == undefined){
        alert('Debe seleccionar medidas');
        return false;
    }else{
        return true;
    } 
}

function parametrosCotizarModal(){
    var id_producto =  $(".modal_id_producto").val();
    var id_tipo = $(".select_tipo_modal").val();
    var text_tipo = $( ".select_tipo_modal option:selected" ).text();
    var id_medida = $("#medida_modal").val();
    var text_medida = $( "#medida_modal option:selected" ).text();
    var color =  $(".active-color").attr("data-color");
    var tipo = $(".select_tipo").val();
    var elementName = $(".modal_nombre_producto").html();
    var elementimageUrl =  $(".modal_imagen_producto").attr("src");
    var elementUrl =  $(".modal_nombre_producto").attr("href");
    var elementId_tipo = id_producto + "_" + id_tipo;
    var medida_text = $( "#select_medidas option:selected" ).text();
    var color_text = $(".active-color").attr("data-nombrecolor");
    console.log(id_producto);
    console.log(id_tipo);
    console.log(text_tipo);
    console.log(id_medida);
    console.log(text_medida);
    console.log(color);
    if(id_medida == undefined){
        console.log("no tiene medida");

    }else{
        elementId_tipo += "_" + id_medida;
    }
    if(color == undefined ){
        console.log("no tiene color");
    }else{
     elementId_tipo += "_" + color;
    }
    //console.log(id_producto, elementName, cantidad, elementimageUrl, elementUrl, elementId_tipo, id_tipo, text_tipo, medida_text, color , color_text);
    cotizar(id_producto, elementName, cantidad, elementimageUrl, elementUrl, elementId_tipo, id_tipo, text_tipo, medida_text, color , color_text);
}

function parametrosCotizar(){
    var id_producto =  $("#id_producto").val();
    var tipo = $("#select_tipo").val();
    var tipo_text = $( "#select_tipo option:selected" ).text();
    var id_medida = $("#select_medidas").val();
    var medida_text = $( "#select_medidas option:selected" ).text();
    var color =  $(".active-color").attr("data-color");
    var color_text = $(".active-color").attr("data-nombrecolor");
    console.log(id_producto);
    console.log(tipo);
    console.log(tipo_text);
    console.log(id_medida);
    console.log(medida_text);
    console.log(color);


    var elementName = $("#modal_nombre_producto").html();
    var elementimageUrl =  $("#modal_imagen_producto").attr("src");
    var elementUrl =  $("#modal_nombre_producto").attr("href");
    var elementId_tipo = id_producto + "_" + tipo;
    // console.log(!id_medida);
    // console.log(!color);
    
    if(id_medida){
        elementId_tipo += "_" + id_medida;
    }

    if(color){
        console.log(color);
        elementId_tipo += "_" + color;
    }
    console.log(elementId_tipo);
    cotizar(id_producto, elementName, cantidad, elementimageUrl, elementUrl, elementId_tipo, tipo, tipo_text, medida_text, color , color_text);
}

function cotizar(id_producto, elementName, cantidad, elementimageUrl, elementUrl, elementId_tipo, tipo, tipo_text, medida_text = null, color = null, color_text = null){
    $(".cargando-producto").css("display","block");
    var cantidad = $(".qty").val();
    var id_producto = $("#id_producto").val();
    basket = JSON.parse(localStorage.getItem('basket'));   // Parse data from localstorage
    //                                                            // element.imageUrl is a part of backend data received from JSON file
    //                                                         // element.price is a part of backend data received from JSON file
    console.log(basket);
    if (!basket) {
        basket = [];
    }

    console.log(id_producto);
    console.log( elementName);
    console.log(cantidad);
    console.log(elementimageUrl);
    console.log(elementUrl);
    console.log(elementId_tipo);
    console.log(tipo);
    console.log(tipo_text);
    console.log(medida_text);
    console.log(color);
    console.log(color_text);
    
    //find the index of the item if already in basket

    
    const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId_tipo === elementId_tipo);
    console.log(itemIndexInBasket);
    if (itemIndexInBasket !== -1) {
        var newCantidad = parseInt(cantidad) + parseInt(basket[itemIndexInBasket].cantidad);
        basket[itemIndexInBasket].cantidad = newCantidad;
    } else {
        basket.push({id_producto, elementName, cantidad, elementimageUrl, elementUrl, elementId_tipo, tipo, tipo_text, medida_text, color, color_text});    // Push not existing data to localstorage
    } 
    localStorage.setItem('basket', JSON.stringify(basket));
    // console.log(JSON.parse(localStorage.getItem('basket')));
    add_cart();
    $(".cargando-producto").css("display","none");
    $(".url-cotizacion").css("display","block");
    
    $(".qty").val("1");
}

</script>

