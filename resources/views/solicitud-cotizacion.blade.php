@extends('layout.app')

@section('contenido')
<div class="container">
    <div style="display:flex; flex-direction:row;" class="containerFlex">
        <div class="col-lg-7 formulario">
            <form class="needs-validation" novalidate >
                <h3>Ingrese sus Datos</h3>
                <div class="form-group">
                    <label for="exampleInputRut">Rut</label>
                    <input type="text" class="form-control" id="exampleInputRut" aria-describedby="rutHelp"
                        placeholder="Ingrese su RUT con dígito verificador" required>
                        <div class="invalid-feedback">
                            Debe ingresar su rut
                        </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="exampleInputNombre">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputNombre" placeholder="Nombres" required>
                        <div class="invalid-feedback">
                            Debe ingresar su nombre
                        </div>
                    </div>
                    <div class="col">
                        <label for="exampleInputApellido">Apellido</label>
                        <input type="text" class="form-control" id="exampleInputApellido" placeholder="Apellidos" required>
                        <div class="invalid-feedback">
                            Debe ingresar su apellido
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputDireccion">Direccion</label>
                    <input type="text" class="form-control" id="exampleInputDireccion"
                        placeholder="Nombre de la calle y Número" required>
                        <div class="invalid-feedback">
                            Debe ingresar su dirección
                        </div>
                    <!-- <small id="rutHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Región</label>
                    <select class="form-control" id="regiones" required>
                    </select>
                    <div class="invalid-feedback">
                            Debe ingresar su region
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Comuna</label>
                    <select class="form-control" id="comunas" required>
                    </select>
                    <div class="invalid-feedback">
                            Debe ingresar su comuna
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControltelefono">Télefono</label>
                    <input type="text" class="form-control" id="exampleFormControltelefono" placeholder="" required>
                    <div class="invalid-feedback">
                            Debe ingresar su telefono
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" required>
                        <div class="invalid-feedback">
                            Debe ingresar su correo electrónico
                        </div>
                </div>
                <button class="btn btn-primary" type="submit"  id="boton-formulario" style="display: none;">Submit form</button>
            </form>
        </div>
        <div class="col-lg-5">
            <div class="align-left">
                <div class="checkout-order-review align-left">
                    <div class="box-content featured-boxes">
                        <h3 id="order_review_heading" class="text-md text-uppercase">Cotización</h3>


                        <div id="order_review" class="woocommerce-checkout-review-order">


                            <table class="shop_table review-order woocommerce-checkout-review-order-table mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="product-name">
                                            <h4 class="mb-0">Producto</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="productosTabla">
                                    
                                </tbody>
                            </table>

                            <div id="payment" class="woocommerce-checkout-payment">


                                <div class="porto-separator m-b-md">
                                    <hr class="separator-line  align_center">
                                </div>

                                <div class="form-row place-order">
                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                        <div class="woocommerce-privacy-policy-text">
                                            <p>Sus datos personales se utilizarán para procesar su solicitud de
                                                cotización, respaldar su experiencia en este sitio web y para otros
                                                fines descritos en nuestra <a
                                                    href="https://vanni.cl/politicas-de-privacidad/"
                                                    class="woocommerce-privacy-policy-link" target="_blank">política de
                                                    privacidad</a>.</p>
                                        </div>
                                    </div>
                                    <a href="" onclick="enviarCotizacion()" class="btn btn-v-dark w-100 m-t-lg py-3" id="botonCotizar" style="background: #FC0;font-weight: 700;text-transform: uppercase;">Enviar Cotización<i class="vc_btn3-icon fas fa-arrow-right pl-3" aria-hidden="true"></i></a>
                                    <input type="hidden" id="woocommerce-process-checkout-nonce"
                                        name="woocommerce-process-checkout-nonce" value="67f0280f18"><input
                                        type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
      

    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" id ="cerrarModal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>
<style>
    .formulario h3{
        margin-bottom: 13px;
        font-size: 22px;
        font-weight: 700;
        letter-spacing: -.01em;
        line-height: 32px;

    }
    .align-left {
        text-align: left;
    }

    .checkout-order-review .featured-boxes {
        padding: 22px 32px;
    }

    .featured-boxes {
        border: 2px solid #e7e7e7;
    }

    #order_review_heading {
        margin-bottom: 13px;
        font-size: 22px;
        font-weight: 700;
        letter-spacing: -.01em;
        line-height: 32px;
    }

    .text-uppercase {
        text-transform: uppercase !important;
    }

    h3 {
        font-family: Poppins, sans-serif;
        color: #222529 !important;
    }

    .shop_table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    }

    .shop_table thead tr,
    .shop_table tr:not(:last-child) {
        border-bottom: 1px solid #e7e7e7;
    }

    .shop_table th {
        display: none !important;
    }

    .shop_table th {
        text-align: left;
        padding: 10px;
    }

    .shop_table tbody td.product-name {
        font-weight: 500;
        word-break: break-word;
    }

    .checkout-order-review .shop_table td {
        padding: 12px 10px;
    }

    .shop_table td {
        text-align: left;
    }

    .text-v-dark {
        color: #222529 !important;
    }

    .line-height-sm {
        line-height: 20px !important;
    }

    .form-row:not(.row) {
        display: block;
        margin-left: 0;
        margin-right: 0;
    }

    .form-row {
        margin-bottom: 15px;
        vertical-align: top;
    }

    .checkout-order-review .woocommerce-privacy-policy-text p {
        padding: 0 8px;
        font-size: 13px;
    }

    .woocommerce-privacy-policy-text p {
        line-height: 23px;
        color: #8a8b8e;
    }

    .woocommerce-privacy-policy-link {
        color: #ffcc00;
    }

    #place_order {
        padding: 0.5rem 0.875rem;
        font-size: 0.875rem;
        line-height: 1.3333;

    }

    input[type="submit"] {
        transition: all 0.1s;
        cursor: pointer;
        background-color: #ffcc00;
        border-color: #ffcc00;
    }

    @media (max-width:991px){
        .containerFlex{
            flex-direction: column !important;
        }
    }
</style>
<script>
    var RegionesYcomunas = {

        "regiones": [{
                "NombreRegion": "Arica y Parinacota",
                "comunas": ["Arica", "Camarones", "Putre", "General Lagos"]
            },
            {
                "NombreRegion": "Tarapacá",
                "comunas": ["Iquique", "Alto Hospicio", "Pozo Almonte", "Camiña", "Colchane", "Huara", "Pica"]
            },
            {
                "NombreRegion": "Antofagasta",
                "comunas": ["Antofagasta", "Mejillones", "Sierra Gorda", "Taltal", "Calama", "Ollagüe",
                    "San Pedro de Atacama", "Tocopilla", "María Elena"
                ]
            },
            {
                "NombreRegion": "Atacama",
                "comunas": ["Copiapó", "Caldera", "Tierra Amarilla", "Chañaral", "Diego de Almagro", "Vallenar",
                    "Alto del Carmen", "Freirina", "Huasco"
                ]
            },
            {
                "NombreRegion": "Coquimbo",
                "comunas": ["La Serena", "Coquimbo", "Andacollo", "La Higuera", "Paiguano", "Vicuña", "Illapel",
                    "Canela", "Los Vilos", "Salamanca", "Ovalle", "Combarbalá", "Monte Patria", "Punitaqui",
                    "Río Hurtado"
                ]
            },
            {
                "NombreRegion": "Valparaíso",
                "comunas": ["Valparaíso", "Casablanca", "Concón", "Juan Fernández", "Puchuncaví", "Quintero",
                    "Viña del Mar", "Isla de Pascua", "Los Andes", "Calle Larga", "Rinconada", "San Esteban",
                    "La Ligua", "Cabildo", "Papudo", "Petorca", "Zapallar", "Quillota", "Calera", "Hijuelas",
                    "La Cruz", "Nogales", "San Antonio", "Algarrobo", "Cartagena", "El Quisco", "El Tabo",
                    "Santo Domingo", "San Felipe", "Catemu", "Llaillay", "Panquehue", "Putaendo", "Santa María",
                    "Quilpué", "Limache", "Olmué", "Villa Alemana"
                ]
            },
            {
                "NombreRegion": "Región del Libertador Gral. Bernardo O’Higgins",
                "comunas": ["Rancagua", "Codegua", "Coinco", "Coltauco", "Doñihue", "Graneros", "Las Cabras",
                    "Machalí", "Malloa", "Mostazal", "Olivar", "Peumo", "Pichidegua", "Quinta de Tilcoco",
                    "Rengo", "Requínoa", "San Vicente", "Pichilemu", "La Estrella", "Litueche", "Marchihue",
                    "Navidad", "Paredones", "San Fernando", "Chépica", "Chimbarongo", "Lolol", "Nancagua",
                    "Palmilla", "Peralillo", "Placilla", "Pumanque", "Santa Cruz"
                ]
            },
            {
                "NombreRegion": "Región del Maule",
                "comunas": ["Talca", "ConsVtución", "Curepto", "Empedrado", "Maule", "Pelarco", "Pencahue",
                    "Río Claro", "San Clemente", "San Rafael", "Cauquenes", "Chanco", "Pelluhue", "Curicó",
                    "Hualañé", "Licantén", "Molina", "Rauco", "Romeral", "Sagrada Familia", "Teno", "Vichuquén",
                    "Linares", "Colbún", "Longaví", "Parral", "ReVro", "San Javier", "Villa Alegre",
                    "Yerbas Buenas"
                ]
            },
            {
                "NombreRegion": "Región del Biobío",
                "comunas": ["Concepción", "Coronel", "Chiguayante", "Florida", "Hualqui", "Lota", "Penco",
                    "San Pedro de la Paz", "Santa Juana", "Talcahuano", "Tomé", "Hualpén", "Lebu", "Arauco",
                    "Cañete", "Contulmo", "Curanilahue", "Los Álamos", "Tirúa", "Los Ángeles", "Antuco",
                    "Cabrero", "Laja", "Mulchén", "Nacimiento", "Negrete", "Quilaco", "Quilleco", "San Rosendo",
                    "Santa Bárbara", "Tucapel", "Yumbel", "Alto Biobío", "Chillán", "Bulnes", "Cobquecura",
                    "Coelemu", "Coihueco", "Chillán Viejo", "El Carmen", "Ninhue", "Ñiquén", "Pemuco", "Pinto",
                    "Portezuelo", "Quillón", "Quirihue", "Ránquil", "San Carlos", "San Fabián", "San Ignacio",
                    "San Nicolás", "Treguaco", "Yungay"
                ]
            },
            {
                "NombreRegion": "Región de la Araucanía",
                "comunas": ["Temuco", "Carahue", "Cunco", "Curarrehue", "Freire", "Galvarino", "Gorbea", "Lautaro",
                    "Loncoche", "Melipeuco", "Nueva Imperial", "Padre las Casas", "Perquenco", "Pitrufquén",
                    "Pucón", "Saavedra", "Teodoro Schmidt", "Toltén", "Vilcún", "Villarrica", "Cholchol",
                    "Angol", "Collipulli", "Curacautín", "Ercilla", "Lonquimay", "Los Sauces", "Lumaco",
                    "Purén", "Renaico", "Traiguén", "Victoria",
                ]
            },
            {
                "NombreRegion": "Región de Los Ríos",
                "comunas": ["Valdivia", "Corral", "Lanco", "Los Lagos", "Máfil", "Mariquina", "Paillaco",
                    "Panguipulli", "La Unión", "Futrono", "Lago Ranco", "Río Bueno"
                ]
            },
            {
                "NombreRegion": "Región de Los Lagos",
                "comunas": ["Puerto Montt", "Calbuco", "Cochamó", "Fresia", "FruVllar", "Los Muermos", "Llanquihue",
                    "Maullín", "Puerto Varas", "Castro", "Ancud", "Chonchi", "Curaco de Vélez", "Dalcahue",
                    "Puqueldón", "Queilén", "Quellón", "Quemchi", "Quinchao", "Osorno", "Puerto Octay",
                    "Purranque", "Puyehue", "Río Negro", "San Juan de la Costa", "San Pablo", "Chaitén",
                    "Futaleufú", "Hualaihué", "Palena"
                ]
            },
            {
                "NombreRegion": "Región Aisén del Gral. Carlos Ibáñez del Campo",
                "comunas": ["Coihaique", "Lago Verde", "Aisén", "Cisnes", "Guaitecas", "Cochrane", "O’Higgins",
                    "Tortel", "Chile Chico", "Río Ibáñez"
                ]
            },
            {
                "NombreRegion": "Región de Magallanes y de la AntárVca Chilena",
                "comunas": ["Punta Arenas", "Laguna Blanca", "Río Verde", "San Gregorio",
                    "Cabo de Hornos (Ex Navarino)", "AntárVca", "Porvenir", "Primavera", "Timaukel", "Natales",
                    "Torres del Paine"
                ]
            },
            {
                "NombreRegion": "Región Metropolitana de Santiago",
                "comunas": ["Cerrillos", "Cerro Navia", "Conchalí", "El Bosque", "Estación Central", "Huechuraba",
                    "Independencia", "La Cisterna", "La Florida", "La Granja", "La Pintana", "La Reina",
                    "Las Condes", "Lo Barnechea", "Lo Espejo", "Lo Prado", "Macul", "Maipú", "Ñuñoa",
                    "Pedro Aguirre Cerda", "Peñalolén", "Providencia", "Pudahuel", "Quilicura", "Quinta Normal",
                    "Recoleta", "Renca", "San Joaquín", "San Miguel", "San Ramón", "Vitacura", "Puente Alto",
                    "Pirque", "San José de Maipo", "Colina", "Lampa", "TilVl", "San Bernardo", "Buin",
                    "Calera de Tango", "Paine", "Melipilla", "Alhué", "Curacaví", "María Pinto", "San Pedro",
                    "Talagante", "El Monte", "Isla de Maipo", "Padre Hurtado", "Peñaflor"
                ]
            }
        ]
    }


jQuery(document).ready(function() {

    var iRegion = 0;
    var htmlRegion =
        '<option value="sin-region">Seleccione región</option><option value="sin-region">--</option>';
    var htmlComunas =
        '<option value="sin-region">Seleccione comuna</option><option value="sin-region">--</option>';

    jQuery.each(RegionesYcomunas.regiones, function() {
        htmlRegion = htmlRegion + '<option value="' + RegionesYcomunas.regiones[iRegion].NombreRegion +
            '">' + RegionesYcomunas.regiones[iRegion].NombreRegion + '</option>';
        iRegion++;
    });

    jQuery('#regiones').html(htmlRegion);
    jQuery('#comunas').html(htmlComunas);

    jQuery('#regiones').change(function() {
        var iRegiones = 0;
        var valorRegion = jQuery(this).val();
        var htmlComuna =
            '<option value="sin-comuna">Seleccione comuna</option><option value="sin-comuna">--</option>';
        jQuery.each(RegionesYcomunas.regiones, function() {
            if (RegionesYcomunas.regiones[iRegiones].NombreRegion == valorRegion) {
                var iComunas = 0;
                jQuery.each(RegionesYcomunas.regiones[iRegiones].comunas, function() {
                    htmlComuna = htmlComuna + '<option value="' + RegionesYcomunas
                        .regiones[iRegiones].comunas[iComunas] + '">' + RegionesYcomunas
                        .regiones[iRegiones].comunas[iComunas] + '</option>';
                    iComunas++;
                });
            }
            iRegiones++;
        });
        jQuery('#comunas').html(htmlComuna);
    });
    jQuery('#comunas').change(function() {
        if (jQuery(this).val() == 'sin-region') {
            alert('selecciones Región');
        } else if (jQuery(this).val() == 'sin-comuna') {
            alert('selecciones Comuna');
        }
    });
    jQuery('#regiones').change(function() {
        if (jQuery(this).val() == 'sin-region') {
            alert('selecciones Región');
        }
    });

});

$(document).ready(function() {
    let cantidadCanasta = JSON.parse(localStorage.basket).length;
    if (cantidadCanasta > 0) {
        $(".cart-empty-page").css("display", "none");
        $(".woocommerce-notices-wrapper").css("display", "block");
        //window.localStorage.clear ();
        //console.log(localStorage.basket);
        var productos = JSON.parse(localStorage.basket);
        var html = '';
        //console.log(JSON.parse(localStorage.basket).length);
        for(var i=0; i<productos.length; i++){
 
            var nombre = productos[i].elementName;
            console.log(nombre.toUpperCase().replace(/\s/g, ''));
            console.log(productos[i].tipo_text.toUpperCase().replace(/\s/g, ''));
            if(nombre.toUpperCase().replace(/\s/g, '') != productos[i].tipo_text.toUpperCase().replace(/\s/g, '')){
                nombre += ' -- ' + productos[i].tipo_text;
            }
            console.log(nombre);
            html += '<tr class="cart_item_'+i+'">'
            html += '<td class="product-name text-v-dark line-height-sm">'
            html += '<div class="position-relative">'
            html+= `<a href="${productos[i].elementUrl}" class="text-v-dark font-weight-medium">${nombre}<strong class="product-quantity font-weight-medium">×&nbsp;${productos[i].cantidad}</strong></a></div></td>`;
            html += '</tr>';
        }
        $('tbody#productosTabla:last-child').append(html);
    } else {
        $(".cart-empty-page").css("display", "block");
        $(".woocommerce-notices-wrapper").css("display", "none");
    }
    
})

$("#place_order").click(function(){
    let cotizanteData = new Object();
    cotizanteData.rut = $("#exampleInputRut").val();
    cotizanteData.nombre = $("#exampleInputNombre").val();
    cotizanteData.apellido = $("#exampleInputApellido").val();
    cotizanteData.direccion = $("#exampleInputDireccion").val();
    cotizanteData.region = $("#regiones").val();
    cotizanteData.comuna = $("#comunas").val();
    cotizanteData.telefono = $("#exampleFormControltelefono").val();
    cotizanteData.email = $("#exampleFormControlInput1").val();
    console.log(JSON.parse(localStorage.basket));
    let producto = [];
    let productoJson = JSON.parse(localStorage.basket);
    for(i = 0; i <JSON.parse(localStorage.basket).length; i++ ){

        var tipo = "";
        if( productoJson[i].tipo != "null" && productoJson[i].tipo != productoJson[i].elementName ){
            var tipo = " -- " +  productoJson[i].elementNombreTipo
        }

        var medida = " -- " + productoJson[i].elementNameMedida;
        
        producto[i] = {
            "DETALLE" : productoJson[i].elementName + tipo + medida,
            "UNIDAD" : productoJson[i].cantidad
        }
    }
    
    cotizanteData.productos = producto;
    console.log(JSON.parse(localStorage.basket));
    console.log(producto);

    $.ajax({
        type: "GET",
        url: "{{route('enviarCotizacion')}}",
        data: cotizanteData
    }).done(function(resp){
        console.log(resp);
    }).fail(function(objeto, tipoError, errorHttp){
            return false;
    });
})


function enviarCorreo(){
    event.preventDefault();
    event.stopPropagation();
    console.log("aca entro");
    let cotizanteData = new Object();
    cotizanteData.rut = $("#exampleInputRut").val();
    cotizanteData.nombre = $("#exampleInputNombre").val();
    cotizanteData.apellido = $("#exampleInputApellido").val();
    cotizanteData.direccion = $("#exampleInputDireccion").val();
    cotizanteData.region = $("#regiones").val();
    cotizanteData.comuna = $("#comunas").val();
    cotizanteData.telefono = $("#exampleFormControltelefono").val();
    cotizanteData.email = $("#exampleFormControlInput1").val();
    console.log(JSON.parse(localStorage.basket));
    let producto = [];
    let productoJson = JSON.parse(localStorage.basket);

    var tipo = "";
    for(i = 0; i <JSON.parse(localStorage.basket).length; i++ ){
        var detalle = "";
 
        if( productoJson[i].tipo != "null"){
            if(productoJson[i].tipo_text.toUpperCase() != productoJson[i].elementName.toUpperCase()){
                detalle += " -- " +  productoJson[i].tipo_text
            }
          
        }

        detalle += " -- " + productoJson[i].elementNameMedida;
        
        producto[i] = {
            "DETALLE" : productoJson[i].elementName + detalle,
            "UNIDAD" : productoJson[i].cantidad
        }
    }
    cotizanteData.productos = producto;

    
    $.ajax({
        type: "GET",
        url: "{{route('enviarCotizacion')}}",
        data: cotizanteData
    }).done(function(resp){
        $('#exampleModal').modal('show');
        $('.modal-title').html("Cotización Exitosa");
        $('.modal-body').html("Se ha realizado cotización con exito");
    }).fail(function(objeto, tipoError, errorHttp){
        $('#exampleModal').modal('show');
        $('.modal-title').html("Error!");
        $('.modal-body').html("Se ha presentado un error al momento de cotizar");
            return false;
    });
}

$( "#cerrarModal" ).click(function() {
    $('#exampleModal').modal('hide');
    localStorage.clear();
    location.href = '{{asset('/')}}';
});
function enviarCotizacion(){
    event.preventDefault();
    event.stopPropagation();
    $("#boton-formulario").click();
}
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }else{
            enviarCorreo();
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

@endsection
