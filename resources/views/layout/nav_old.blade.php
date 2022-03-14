<nav class="navbar navbar-light bg-light nav-log" style="box-shadow: none;">
    <div class="container container-logo">
        <a class="navbar-brand" href="#">
            <img src="{{asset('imagenes\Productos\icono-removebg-preview.png')}}" height="30" alt="" loading="lazy"
                style="width:20%" />
        </a>
        <ul class="nav">
            <li class="nav-item " style="display: flex; align-items: center;padding-left: 15px; padding-right: 15px;">
                <a class="nav-link" href="#">
                    <span style="text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </span>
                </a>
                <div class="porto-sicon-header item-telefono">
                    <h3 class="porto-sicon-title"
                        style="font-weight:600;font-size:11px;line-height:11px;color:#777; margin-bottom: 2px !important;padding: 0px !important">
                        CONTÁCTANOS</h3>
                    <p style="font-weight:700;font-size:18px;line-height:18px;color:#222529; margin: 0px !important;">
                        +562 2892 1000</p>
                </div>
            </li>
            <!-- Badge -->
            <!-- <li class="nav-item dropdown">
                <i class="item bi bi-bag">
                
                    <div class="unseen-count" id="unseen_count">0</div>
                </i>
                <i class="bi bi-caret-down-fill"></i>
            </li> -->
            <li class="nav-item dropdown li-carrito-item" id="carrito-item">
                <a class="nav-item nav-link dropdown-toggle mr-md-2 a-carrito-item" id="bd-versions"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="item bi bi-bag">

                        <div class="unseen-count" id="unseen_count">0</div>
                    </i>
                </a>
                <div class="dropdown-menu dropdown-menu-md-right div-carrito-item" aria-labelledby="bd-versions"
                    style="width: 400px;">
                </div>
            </li>
        </ul>
    </div>
</nav>
<script>
$(".dropdown-toggle").click(function() {
    var clase = $(".li-carrito-item").attr("class");
    var x = $("header.bd-navbar").css("z-index");

    if (clase == "nav-item dropdown li-carrito-item") {
        $("header.bd-navbar").css("z-index", 1);
    } else {
        $("header.bd-navbar").css("z-index", 1071);
    }
    // if(x == 1071){
    //     $("header.bd-navbar").css("z-index", 1);
    // }else{
    //     $("header.bd-navbar").css("z-index", 1071);
    // }
})
</script>
<header class="menu-page navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar justify-content-center"
    style="box-shadow: none; width: 102%;">
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link " href="{{asset('/')}}">Inicio</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle mr-md-2" ="{{asset('productos')}}" id="bd-versions" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Productos para
                </a>
                <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item active" href="/docs/4.4/">Delivery</a>
                    <a class="dropdown-item" href="https://getbootstrap.com/docs/4.3/">Pastelería y repostería</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{asset('productos')}}">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('contacto')}}">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{asset('cotizacion')}}"
                    style="background: #FC0; padding: 10px!important;">Cotización</a>
            </li>
        </ul>
    </div>
</header>
<nav role="navigation" class="menu-phone" style="display:none">
    <div id="menuToggle">
        <input type="checkbox" class="input-menu" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <li><a href="{{asset('/')}}">Inicio</a></li>
            <li><a href="{{asset('productos')}}">Productos</a></li>
            <!-- <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Productos para
                </a>
                <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item active" href="/docs/4.4/">Latest (4.4.x)</a>
                    <a class="dropdown-item" href="https://getbootstrap.com/docs/4.3/">v4.3.1</a>
                    <a class="dropdown-item" href="https://getbootstrap.com/docs/4.2/">v4.2.1</a>
                    <a class="dropdown-item" href="https://getbootstrap.com/docs/4.0/">v4.0.0</a>
                </div>
            </li>
            <li><a href="#">Desarrollo</a></li> -->
            <li><a href="{{asset('nosotros')}}">Nosotros</a></li>
            <li><a href="{{asset('contacto')}}">Contacto</a></li>
            <li><a style="background: #FC0; padding: 10px!important;" href="{{asset('cotizacion')}}">Cotización</a></li>
           <br> 
            <section class="mb-4" style="text-align:center;">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1 botones-social" href="https://www.facebook.com/envases.vyp" role="button"><i
                                    class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1 botones-social" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <!-- <a class="btn btn-outline-light btn-floating m-1 botones-social" href="#!" role="button"><i class="fab fa-google"></i></a> -->

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1 botones-social" href="#!" role="button"><i
                                    class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <!-- <a class="btn btn-outline-light btn-floating m-1 botones-social" href="#!" role="button"><i
                                    class="fab fa-linkedin-in"></i></a> -->

                            <!-- Github -->
                            <!-- <a class="btn btn-outline-light btn-floating m-1 botones-social" href="#!" role="button"><i class="fab fa-github"></i></a> -->
                        </section>
        </ul>
    </div>
    <a class="navbar-brand" id="contenedor-icono" href="#" style="margin-left: 6%;
    margin-right: 17%; margin-top: 14px;" >
        <img class="icono" src="{{asset('imagenes\Productos\icono-removebg-preview.png')}}" height="30" alt=""
            loading="lazy" style="width:11%; margin-top: 6px;" />
    </a>
    <li class="nav-item dropdown li-carrito-item" id="carrito-item" style="top: 20px;">
            <a class="nav-item nav-link dropdown-toggle mr-md-2 a-carrito-item" id="bd-versions" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="item bi bi-bag">

                    <div class="unseen-count" id="unseen_count">0</div>
                </i>
            </a>
            <div class="dropdown-menu dropdown-menu-md-right div-carrito-item" aria-labelledby="bd-versions"
                style="width: 400px;">
            </div>
    </li>
</nav>

<style>
.menu-phone nav {
    background-color: #1E1E23;
    height: 65px;
}


.menu-phone #menuToggle {
    display: flex;
    flex-direction: column;
    position: relative;
    top: 40px;
    left: 25px;
    z-index: 1;
    -webkit-user-select: none;
    user-select: none;
}

.menu-phone #menuToggle input {
    display: flex;
    width: 40px;
    height: 32px;
    position: absolute;
    cursor: pointer;
    opacity: 0;
    z-index: 2;
}

.menu-phone #menuToggle span {
    display: flex;
    width: 29px;
    height: 2px;
    margin-bottom: 5px;
    position: relative;
    background: yellow;
    border-radius: 3px;
    z-index: 1;
    transform-origin: 5px 0px;
    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
        background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0),
        opacity 0.55s ease;
}

.menu-phone #menuToggle span:first-child {
    transform-origin: 0% 0%;
}

.menu-phone #menuToggle span:nth-last-child(2) {
    transform-origin: 0% 100%;
}

.menu-phone #menuToggle input:checked~span {
    opacity: 1;
    transform: rotate(45deg) translate(-3px, -1px);
    background: #36383F;
}

.menu-phone #menuToggle input:checked~span:nth-last-child(3) {
    opacity: 0;
    transform: rotate(0deg) scale(0.2, 0.2);
}

.menu-phone #menuToggle input:checked~span:nth-last-child(2) {
    transform: rotate(-45deg) translate(0, -1px);
}

.menu-phone #menu {
    position: absolute;
    width: 245px;
    height: 453px;
    box-shadow: 0 0 10px #85888C;
    margin: -50px 0 0 -50px;
    padding: 50px;
    padding-top: 125px;
    background-color: #F5F6FA;
    -webkit-font-smoothing: antialiased;
    transform-origin: 0% 0%;
    transform: translate(-100%, 0);
    transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
}

.menu-phone #menu li {
    padding: 10px 0;
    transition-delay: 2s;
}

.menu-phone #menuToggle input:checked~ul {
    transform: none;
}
</style>

<style>
.bd-navbar {
    min-height: 4rem;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 5%), inset 0 -1px 0 rgb(0 0 0 / 10%);
    background-color: #fff !important;
}

@media (min-width: 768px) {
    .bd-navbar {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1071;
    }
}

.menu-page a {
    font-family: Open Sans, sans-serif !important;
    font-size: 20px !important;
    font-weight: 700 !important;
    line-height: 18px !important;
    letter-spacing: 0 !important;
    color: #222529 !important;
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
}

@media(max-width: 991px) {
    .nav-log {
        display: none;
    }

    .menu-page {
        display: none;
    }

    .menu-phone {
        display: flex !important;
    }
}

@media(max-width: 991px) {
    .border-amarillo {
        height: 81%;
    }

    .contenido-texto-card {
        flex-direction: column !important;
    }
}

@media(max-width: 411px) {
    .menu-phone .navbar-brand {
        margin-left: 12% !important;
    }

    .menu-phone .icono {
        width: 25% !important;
    }

    /* .icono-responsivo{
      margin-left: 40% !important;
    } */
}

.cart-items {
    right: -11px;
    top: 1px;
}

.cart-items {
    position: absolute;
    font-size: 10px;
    font-weight: 600;
    text-align: center;
    width: 16px;
    height: 16px;
    line-height: 16px;
    border-radius: 8px;
    overflow: hidden;
    color: #fff;
    background-color: #ff5b5b;
}

.item {
    position: relative;
    font-size: 25px;
}

.unseen-count {
    background: #ff5b5b;
    border-radius: 50%;
    top: -0.01rem;
    left: 1.0rem;
    position: absolute;
    text-align: center;
    font-family: sans-serif;
    color: #fff;
    line-height: 1.01rem;

    width: 16px;
    height: 16px;
    font-size: 10px;
    font-weight: 600;
}

@keyframes bounce {
    0% {
        transform: translateY(0);
    }

    7% {
        transform: translateY(-1.5rem);
    }

    10% {
        transform: translateY(0);
    }

    15% {
        transform: translateY(-0.7rem);
    }

    18% {
        transform: translateY(0);
    }

    21% {
        transform: translateY(-0.3rem);
    }

    23% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(0);
    }
}

.unseen-count-animation {
    animation-name: bounce;
    animation-timing-function: ease;
    animation-duration: 3s;
    animation-iteration-count: infinite;
}

.controls {
    text-align: center;
}

.controls>.add {
    background: #ccc;
    border: 2px solid #777;
    padding: 0.25rem;
    border-radius: 0.5rem;
}

a.remove.remove-product {
    top: -10px;
    right: -10px;
}

a.remove.remove-product {
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

a.remove {
    padding: 0;
    text-decoration: none;
}

a.remove:before {
    content: "";
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
}

.botones-social{
        color: black !important;
        border-color: black !important;
}

@media(max-width: 411px) {
   .div-carrito-item{
    transform: translate3d(-289px, 41px, 0px)  !important;
   }
}

</style>
<script>
// $(".input-menu").click(function() {
//   var elemento = document.getElementById("contenedor-icono");
//   elemento.className += " icono-responsivo";
// });

function agregarItemCarrito(){
    let cantidadCanasta = JSON.parse(localStorage.getItem('basket'));
    console.log(cantidadCanasta);
    if(cantidadCanasta != null){
        cantidadCanasta = cantidadCanasta.length;
        $("#unseen_count").html(cantidadCanasta);
        var html;
        if (cantidadCanasta > 0) {
            html = '<table id="tablaCotizacion"><thead><tr><th style="font-weight: 700;font-size: .8125rem; text-transform: uppercase; width:50%; display: table-cell !important;">Items</th><th style="display: table-cell !important;font-weight: 700;font-size: .8125rem; width:50%;  text-transform: uppercase;">Solicitud de cotización</th></tr></thead><tbody>'
            //console.log("aqui");
            //console.log(localStorage.getItem('basket'));
            var productos = JSON.parse(localStorage.getItem('basket'));
            console.log(productos);
            //console.log(JSON.parse(localStorage.getItem('basket')).length);
            for(var i=0; i<JSON.parse(localStorage.getItem('basket')).length; i++){
                //console.log(i);
                var url = productos[i].elementUrl;
                console.log(url);
                html += '<tr class="cart_item_'+i+'">'
                html += '<td class="product-name"><a href="'+url+'" class="text-v-dark font-weight-medium" style="font-weight: 700;font-size: .8125rem;">'+productos[i].elementName+'</a>';
                console.log(productos[i].tipo);
                if(productos[i].tipo !="null"){
                    console.log("entro aca");
                    html += '<br><a style="font-weight: 700;font-size: .8125rem;">Modelo:'+productos[i].elementNombreTipo+'</a>';
                }
                html += '<br><a style="font-weight: 700;font-size: .8125rem;">Cantidad: x '+productos[i].elementQuantity+'</a>';
                html += '</td>';
                html += '<td class="product-thumbnail" style="text-align: center;">'
                html += '<div class="position-relative">'
                html += '<a href="'+url+'">'
                html += '<img width="100" height="100" alt="'+productos[i].elementName+'" href="'+url+'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" src="'+productos[i].elementimageUrl+'"></a>';
                html += '<a onclick="eliminarItem('+i+','+productos[i].elementId+')" class="button eliminarItem" aria-label="Remove this item"></a>';
                html+= '</div></td>';
                html +=  '</tr>'

            }
            html += '</tbody></table>'
            html += '<br><p class="woocommerce-mini-cart__buttons buttons" id="mini-cart" stlye="text-align: center;"><a href="{{asset('cotizacion')}}" class="button checkout wc-forward">Finalizar compra</a></p>'
            $(".div-carrito-item").html(html);
        } else {
            html = '<p>No hay productos en el carrito.</p>'
            $(".div-carrito-item").html(html);
        }
    }else{
        var html = '<p>No hay productos en el carrito.</p>'
        $(".div-carrito-item").html(html);
    }   
}

$("document").ready(function() {
    agregarItemCarrito();
})

function eliminarItem(id, idElemento, tipo = null) {
    //localStorage.clear();
    console.log(idElemento);
    console.log(tipo);
    
    let basket = JSON.parse(localStorage.getItem('basket')); // Parse data from localstorage
    // element.imageUrl is a part of backend data received from JSON file
    // element.price is a part of backend data received from JSON file


    if (!basket) {
        basket = [];
    }

    // find the index of the item if already in basket
    const itemIndexInBasket = basket.find(basketEntry => basketEntry.elementId === idElemento.toString());
    console.log(itemIndexInBasket);
    if (itemIndexInBasket !== -1) {
        basket.splice(itemIndexInBasket, 1);
        localStorage.setItem('basket', JSON.stringify(basket));
    }
    localStorage.setItem('basket', JSON.stringify(basket));
    //console.log(JSON.parse(localStorage.getItem('basket')));
    $(".cart_item_" + id).remove();
    $(".unseen-count").html(basket.length);
    $(".unseen-count").html(basket.length);
    if (basket.length == 0) {
        html = '<p>No hay productos en el carrito.</p>'
        $(".div-carrito-item").html(html);
    }
}
</script>
<style>
.widget_shopping_cart {
    padding: 0 10px 10px;
}
.widget_shopping_cart {
    margin-bottom: 0;
    *zoom: 1;
}
p {
    margin: 0 0 1.25rem;
}
#mini-cart a {
    background: #010204;
    font-family: Poppins,sans-serif;
}
#mini-cart a {
    font-size: .75rem;
    letter-spacing: .025em;
    text-transform: uppercase;
    padding: .875rem 1.5rem;
    border-radius: 2px;
    float: none;
    width: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    color: #fff;
}
</style>
