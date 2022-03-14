@extends('layout.app')

@section('contenido')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="vc_column_container col-md-6">
            <div class="wpb_wrapper vc_column-inner">
                <div role="form" class="wpcf7" id="wpcf7-f74-p73-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/contacto/#wpcf7-f74-p73-o1" method="post"
                        class="wpcf7-form mailchimp-ext-0.5.36 init" novalidate="novalidate" data-status="init">
                        <h2 class="short"><strong>Contáctanos</strong></h2>
                        <div class="row">
                             <div class="col-lg-6">
                                <div class="form-group"><label for="contac-rut">Rut *</label><br><span
                                        class="wpcf7-form-control-wrap your-name">
                                        <input type="text" class="inputs form-control" name="rut" id="contac-rut" maxlength="12">
                                        </span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label for="contact-name">Nombre Completo *</label><br><span
                                        class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name"
                                            value="" size="40"
                                            class="form-control"
                                            id="contact-name" aria-required="true" aria-invalid="false"></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label for="email">Email *</label><br><span
                                        class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email"
                                            value="" size="40"
                                            class="form-control"
                                            id="email" aria-required="true" aria-invalid="false"></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label for="contact-name">Teléfono *</label><br><span
                                        class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel"
                                            value="" size="40"
                                            class="form-control"
                                            id="contact-telefono" aria-required="true" aria-invalid="false"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="button" value="Enviar" OnClick="enviarContacto()"
                                        class="wpcf7-form-control wpcf7-submit btn btn-primary btn-lg"
                                        aria-invalid="false"><span class="ajax-loader"></span></div>
                            </div>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                        <p style="display: none !important"><span class="wpcf7-form-control-wrap referer-page"><input
                                    type="hidden" name="referer-page" value="https://vanni.cl/"
                                    data-value="https://vanni.cl/" class="wpcf7-form-control wpcf7-text referer-page"
                                    aria-invalid="false"></span></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="vc_column_container col-md-6">
            <div class="wpb_wrapper vc_column-inner">
                <div class="wpb_text_column wpb_content_element" style="margin-bottom: 35px;">
                    <div class="wpb_wrapper">
                        <p style="font-weight: 400;"><span style="color: #222529;"><strong><span style="font-size: 18px;">¿Necesitas asesoría con
                                        algún producto o proyecto especial? Llámenos o envíenos un correo electrónico y
                                        nos pondremos en contacto con usted lo antes posible.</span></strong></span></p>
                    </div>
                </div>
                <div class="porto-separator">
                    <hr class="separator-line align_center">
                </div>
                <div class="porto-sicon-box style_1 default-icon">
                    <div class="porto-sicon-default">
                        <div id="porto-icon-8114881226054ffe8cda68" class="porto-just-icon-wrapper"
                            style="text-align:center;">
                            <div class="porto-icon circle"
                                style="color:#ffffff;background:#f7c104;font-size:14px;display:inline-block;"><i
                                    class="fas fa-map-marker-alt"></i></div>
                        </div>
                    </div>
                    <div class="porto-sicon-header">
                        <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Dirección:</strong>
                        Antonio Lopez de Bello N°743 - Local 232</h3>
                    </div>
                </div>
                <div class="porto-sicon-box style_1 default-icon">
                    <div class="porto-sicon-default">
                        <div id="porto-icon-17491452446054ffe8ce0a7" class="porto-just-icon-wrapper"
                            style="text-align:center;">
                            <div class="porto-icon circle"
                                style="color:#ffffff;background:#f7c104;font-size:14px;display:inline-block;"><i
                                    class="fas fa-phone"></i></div>
                        </div>
                    </div>
                    <div class="porto-sicon-header">
                        <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Teléfono:</strong>
                        +569 4017 7542</h3>
                    </div>
                </div>
                <div class="porto-sicon-box style_1 default-icon">
                    <div class="porto-sicon-default">
                        <div id="porto-icon-13979550126054ffe8ce6e7" class="porto-just-icon-wrapper"
                            style="text-align:center;">
                            <div class="porto-icon circle"
                                style="color:#ffffff;background:#f7c104;font-size:14px;display:inline-block;"><i
                                    class="fas fa-envelope"></i></div>
                        </div>
                    </div>
                    <div class="porto-sicon-header">
                        <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Email:</strong>
                        ventas@envasesvyp.cl</h3>
                    </div>
                </div>
                <div class="porto-separator">
                    <hr class="separator-line align_center">
                </div>
                <h4 class="vc_custom_heading align-left heading-primary"><strong>Horario</strong></h4>
                <div class="porto-sicon-box style_1 default-icon">
                    <div class="porto-sicon-header">
                        <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;">Lunes a Viernes de 8:30 a
                            13:00 y de 14:00 a 17:30 horas.</h3>
                        <h3 class="porto-sicon-title" style="font-size:14px;color:#777777;"><strong>Retiro de Productos:</strong> Lunes a Viernes de 10:00 a 16:00 horas.</h3>
                    </div>
                </div>
                <div class="porto-separator">
                    <hr class="separator-line align_center">
                </div>
                <h4 class="vc_custom_heading align-left heading-primary"><strong>Llegar con</strong></h4>
                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                <div class="vc_row wpb_row vc_inner row">
                    <div class="vc_column_container col-md-6 botones-direccion ">
                        <div class="wpb_wrapper vc_column-inner">
                            <div class="vc_btn3-container vc_btn3-inline"><a
                                    class="vc_general vc_btn3 vc_btn3-size-xl vc_btn3-shape-round vc_btn3-style-custom vc_btn3-icon-left btn"
                                    style="background-color:#33ccff; color:#ffffff; background-color:#33ccff; color:#ffffff; font-size:16px; font-weight:700;"
                                    href="https://ul.waze.com/ul?place=ChIJk10aPrzFYpYRu3ynkcxQ-Fo&ll=-33.43064780%2C-70.64989380&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location"
                                    title=""><i class="vc_btn3-icon fas fa-truck"></i> Waze</a></div>
                        </div>
                    </div>
                    <div class="vc_column_container col-md-6 botones-direccion">
                        <div class="wpb_wrapper vc_column-inner">
                            <div class="vc_btn3-container vc_btn3-inline"><a
                                    class="vc_general vc_btn3 vc_btn3-size-xl vc_btn3-shape-round vc_btn3-style-custom vc_btn3-icon-left btn"
                                    style="background-color:#c5221f; color:#ffffff; background-color:#c5221f; color:#ffffff; font-size:16px; font-weight:700;"
                                    href="https://goo.gl/maps/bWEcX57fgy1wGmRQ9" title=""><i
                                        class="vc_btn3-icon fas fa-map-marker-alt"></i> Google Maps</a></div>
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
<br>
<style>
@media(max-width: 767px) {
    .botones-direccion{
        margin-bottom: 10px !important;
    }
}
</style>
<script>
document.getElementById('contac-rut').addEventListener('input', function(evt) {
  let value = this.value.replace(/\./g, '').replace('-', '');
  
  if (value.match(/^(\d{2})(\d{3}){2}(\w{1})$/)) {
    value = value.replace(/^(\d{2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4');
  }
  else if (value.match(/^(\d)(\d{3}){2}(\w{0,1})$/)) {
    value = value.replace(/^(\d)(\d{3})(\d{3})(\w{0,1})$/, '$1.$2.$3-$4');
  }
  else if (value.match(/^(\d)(\d{3})(\d{0,2})$/)) {
    value = value.replace(/^(\d)(\d{3})(\d{0,2})$/, '$1.$2.$3');
  }
  else if (value.match(/^(\d)(\d{0,2})$/)) {
    value = value.replace(/^(\d)(\d{0,2})$/, '$1.$2');
  }
  this.value = value;
});

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  const email = $("#email").val();
  
    if (validateEmail(email)) {
        $( "#email" ).removeClass().addClass( "form-control" );
        
    }else {
        console.log(email + " is not valid");
        $( "#email" ).addClass( "is-invalid" );
    }
  return false;
}

$("#email").keyup(function(){
    validate();
});

function enviarContacto(){
    $('.bd-navbar').addClass('importantRule');
    let cotizanteData = new Object();
    cotizanteData.rut = $("#contac-rut").val();
    cotizanteData.nombre = $("#contact-name").val();
    cotizanteData.telefono = $("#contact-telefono").val();
    cotizanteData.email = $("#email").val();
    $.ajax({
        type: "GET",
        url: "{{route('enviarContacto')}}",
        data: cotizanteData
    }).done(function(resp){
        console.log(resp);
        $('#exampleModal').modal('show');
        $('.modal-title').html("Cotización Exitosa");
        $('.modal-body').html("Se ha enviado información de contacto con exito");
    }).fail(function(objeto, tipoError, errorHttp){
        $('#exampleModal').modal('show');
        $('.modal-title').html("Error!");
        $('.modal-body').html("Se ha presentado un error al momento de enviar información de contacto");
        return false;
    });
}
$( "#cerrarModal" ).click(function() {
    $('.bd-navbar').removeClass('importantRule');
    $('#exampleModal').modal('hide');
    $("#contac-rut").val('');
    $("#contact-name").val('');
    $("#contact-telefono").val('');
    $("#email").val('');
    $(".bd-navbar").css('background-color', '#fff !important');
});
</script>
<style>
.importantRule { 
    background-color: transparent !important;
 }

</style>
@endsection

