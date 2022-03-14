@extends('layout.app')

@section('contenido')
<br>
<br>
<div class="container">
    <div class="card-columns d-flex justify-content-center">
        <h2 style="font-size: 30px" class="vc_custom_heading align-left">Nuestra Empresa</h2>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <div class="thumb col-md-6"><img width="145" height="145" alt="Industrias-Vanni-interior-2"
                title="Industrias-Vanni-interior-2" data-src="{{asset('imagenes/empresa.jpg')}}" class=" lazyloaded"
                src="{{asset('imagenes/empresa.jpg')}}"><noscript><img class="" src="{{asset('imagenes/empresa.jpg')}}"
                    width="145" height="145" alt="Industrias-Vanni-interior-2"
                    title="Industrias-Vanni-interior-2" /></noscript>
        </div>
        <div class="box-content col-md-6">
            <h4 class="heading-primary"><strong>1938</strong></h4>
            <p><span style="font-size: 16px;"><strong>Industrias VYP S.A. es una empresa que nace en el año 1938 y
                        desde ese tiempo viene creciendo en mercados destinados esencialmente al rubro de contenedores
                        para la línea de alimentos.</strong></span></p>
        </div>
    </div>
    <br>
    <div class="d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px;">
        <div class="wpb_wrapper col-md-10">
            <h2 style="text-align: justify;"><span style="font-size: 19px; color: #222529;"><strong>Somos una empresa
                        líder con más de 80 años de experiencia, nos especializamos en packaging de productos asociados
                        a cartulina y cartón corrugado y microcorrugado, además somos imprenta y fabricante de bandejas
                        de cartón, blondas de papel y envases de cartulina. Nuestras líneas de productos en su mayoría
                        utilizan materiales reciclables y biodegradables dando un sello verde a la
                        empresa.</strong></span></h2>
        </div>

    </div>
    <div class="d-flex justify-content-center">
        <div class="wpb_wrapper col-md-10">
            <p>Todos los procesos productivos se llevan a cabo en nuestras mismas instalaciones, las que han incorporado
                nuevas y modernas tecnologías de impresión, emplacado y troquelado.</p>
            <p>Gracias a la experiencia de nuestros departamentos técnico y comercial en estos años y al trabajo
                conjunto con nuestros clientes, hemos conseguido convertirnos en su socio incondicional, ayudándoles a
                dar un alto valor añadido al embalaje de su producto, de acuerdo a las características concretas de su
                proceso productivo y todo esto con un costo óptimo.</p>
        </div>
    </div>
    <br>
    <div class="d-flex justify-content-center prf-ex" style="">
        <div class="col-md-6">
            <h4 style="font-size: 20px" class="vc_custom_heading align-left">Profesionales con la más alta experiencia
            </h4>
            <div class="wpb_wrapper">
                <p style="text-align: justify; margin-left:0px;">Nuestro equipo de trabajo está formado por
                    profesionales en la escucha y detección de las necesidades del cliente, con un conocimiento técnico
                    del producto y de los diferentes procesos de producción y técnicas de impresión, para poder
                    ofrecerle la mejor solución a sus necesidades.</p>
                <p style="text-align: justify; margin-left:0px;">De este modo el ejecutivo asignado le podrá recomendar
                    cuál es el material idóneo para su necesidad de packaging y qué tipo de impresión es la más eficaz
                    en función de la finalidad de su producto.</p>
            </div>
        </div>
        <div style="col-md-6">
            <img width="400" height="300" alt="Equipo-de-Trabajo-Vanni" title="Equipo-de-Trabajo-Vanni"
                data-src="{{asset('imagenes/Equipo-de-Trabajo.jpg')}}" class="vc_single_image-img lazyloaded"
                src="{{asset('imagenes/Equipo-de-Trabajo.jpg')}}">
        </div>
    </div>
    <br>
    <br>
</div>

<div
    style="background-image: url('{{asset('imagenes/medio-ambiente.jpg')}}'); display: flex; justify-content: center; align-items: center; height: 400px; width: 100%; border: 1px solid black;">
    <div class="col-md-6"
        style="    padding-top: 40px!important; padding-bottom: 40px!important; background-color: rgba(79,124,94,.6)!important;">
        <div class="wpb_wrapper vc_column-inner">
            <h4 style="font-size: 24px;line-height: 24px;text-align: center; color: #fff; font-family: Poppins,sans-serif; font-weight: 700;"
                class="vc_custom_heading">COMPROMISO CON EL AMBIENTE</h4>
            <h5 style="font-size: 18px;text-align: center;font-weight:500; color: #fff;" class="vc_custom_heading">
                Recuperación de Papel y Cartón</h5>
            <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <p style="color: #e6e6e6; text-align: center;"><span style="font-size: 20px;">Durante el año 2019
                            <strong>reciclamos 1.807.729 kilos</strong> de papel y cartón lo equivalente a
                            <strong>30.731 árboles</strong> que se dejaron de cortar.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="d-flex justify-content-center" style="flex-direction: column;">
        <div class="wpb_wrapper col-md-10">
            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
            <h4 style="font-size: 20px; font-family: Poppins,sans-serif; font-weight: 700; line-height: 19px; color: #222529;" class="vc_custom_heading align-left">Objetivos a mediano plazo</h4>
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <ul class="ul-objetivos">
                        <li>Lograr el cumplimiento de los requisitos de los clientes.</li>
                        <li>Mantener un ambiente grato, ameno y cordial que incentive al personal a permanecer en nuestra
                            empresa.</li>
                        <li>Satisfacer las expectativas de los Directores y Socios.</li>
                        <li>Mantener un plan de Marketing para que se conozca la Empresa y sus capacidades, junto con
                            afianzar la marca VANNI en el mercado.</li>
                        <li>Lograr los objetivos de la calidad propuestos por la organización, que satisfaga a los clientes.
                        </li>
                        <li>Proveer los recursos humanos y materiales que se requieren para el control de los procesos y la
                            realización del producto.</li>
                        <li>Mejorar continuamente la eficacia y la eficiencia de nuestros procesos productivos y
                            administrativos.</li>
                        <li>Desarrollar relaciones de mutua confianza y alianza estratégica con clientes y proveedores.</li>
                        <li>Capacitar al personal de todas las aéreas que sean necesarias.</li>
                        <li>Abrir nuevos mercados en el cual se aprovechen las sinergias comerciales, fabriles y de
                            distribución de la Empresa.</li>
                        <li>Estar siempre al día de las nuevas tecnologías, maquinaria y materias primas, que complemente o
                            mejore los procesos fabriles y las necesidades del mercado.</li>
                    </ul>
                </div>
            </div>
            <br>
            <h4 style="font-size: 20px; font-family: Poppins,sans-serif; font-weight: 700; line-height: 19px; color: #222529;" class="vc_custom_heading align-left">Objetivos a largo plazo</h4>
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <ul class="ul-objetivos">
                        <li>En definitiva consolidar la Empresa VANNI, para que en el largo plazo sea una compañía reconocida y afianzada en el mercado, con tecnología, maquinaria y dotación de personal especializado en cada una de las áreas de la empresa, y que satisfaga todas las necesidades de los clientes en nuestro rubro.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="flex-direction: column;">
        <div class="wpb_wrapper col-md-10">
            <div class="porto-separator tall"><hr class="separator-line align_center"></div>
            <h4 style="font-size: 20px" class="vc_custom_heading align-left">Líneas de Comercialización más destacadas</h4>
            <div class="card" style="border: 1px solid #ddd;">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="img-sq-wrap" src="{{asset('imagenes\multi-pkg-nosotros.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                    <h2 class="font-weight-semibold m-b-xs">Línea Micro Packaging</h2>
                    <h6>Artículos fabricados de corrugado y microcorrugado orientados hacia el embalaje y presentación de productos.</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="card" style="border: 1px solid #ddd;">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="img-sq-wrap" src="{{asset('imagenes\multi-pkg-nosotros-2.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                    <h2 class="font-weight-semibold m-b-xs">Línea Multi Packaging</h2>
                    <h6>Diseños especiales de cajas y estuches para alimentos, fruticultura y la industria en general.</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="card" style="border: 1px solid #ddd;">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="img-sq-wrap" src="{{asset('imagenes\multi-pkg-nosotros-3.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                    <h2 class="font-weight-semibold m-b-xs">Línea Food Packaging</h2>
                    <h6>Comprende una vasta gama de bandejas, blondas, estuches y cajas, diseñados especialmente para contener alimentos con los más altos estándares de producción.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<style>
.thumb {
    background: transparent url("{{asset('imagenes\history-thumb.png')}}") no-repeat 0 0;
}

.thumb {
    width: 227px;
    height: 160px;
    margin: 0 0 30px;
    padding: 0;
    float: left;
}

.thumb img {
    border-radius: 150px;
    margin: 7px 8px;
    width: 145px;
    height: 145px;
}

.box-content {
    padding: 30px 20px 10px 20px;
}

.box-content {
    border-top: 4px solid #dfdfdf;
    border-top-color: #fc0;
    position: relative;
    top: -1px;
}

.heading-primary {
    margin: 0 0 -27px 0;
    padding: 0;
    color: #ffcc00 !important;
    font-size: 1.3em;
    font-weight: 400;
    letter-spacing: -.7px;
    font-family: Poppins, sans-serif;
}

.box-content p {
    margin-left: 53px;
}

@media (max-width: 650px) {
    .thumb {
        display: none;
    }
}

@media (max-width: 767px) {
    .prf-ex {
        display: flex;
        flex-direction: column;
    }
}

.ul-objetivos li{
    list-style: disc;
    line-height: 24px;
}

.card-horizontal {
  display: flex;
  flex: 1 1 auto;
}

h4{
    font-family: Poppins,sans-serif;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    color: #222529;
}

.img-sq-wrap{
    max-width:200px
}
</style>
@endsection