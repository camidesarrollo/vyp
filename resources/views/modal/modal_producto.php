<div class="modal fade modal_producto" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <input type="hidden" id="elementId" value="">
            <input type="hidden" id="elementName" value="">
            <input type="hidden" id="elementimageUrl" value="">
            <input type="hidden" id="elementUrl" value="">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><a class="nombreP" id="modal_nombre_producto"><a></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bodyModal" style="display:flex; flex-direction: row;">
                    <div class="contenedorImagen" style="display: flex; justify-content: center;">
                        <img class="imagen-producto" src="" id="modal_imagen_producto">
                    </div>
                    <div class="description-productos">
                        <p class="descripcionP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget risus
                            sit amet elit sagittis quam, quis sagittis sapien. Suspendisse et dui vel
                            orci dignissim commodo eget vitae urna. </p>
                        <p class="descripcionP"><span style="font-size: 18px; color: #000000;"><strong class="cantidadP"
                                    id="modal_embalaje_producto"></strong></span></p>
                        <p class="descripcionP"><span style="font-size: 18px; color: #000000;"><strong
                                    class="medidasP"></strong></span></p>
                        <br>
                        <div class="product_meta" style="display: flex;flex-direction: column;">
                            <span class="sku_wrapper">SKU: <span class="skuP">607.071</span></span>
                            <br>
                            <div style="display: flex;flex-direction: row;">
                                <span class="posted_in">Categorías: <a href="" id="linkTipo"><span
                                            class="tipo"></span></a>
                                </span>
                            </div>
                            <br>
                            <span class="posted_in" style="display:none">Tipos:
                            </span>
                            <div id="tipoProducto">
                            </div>
                        </div>
                        <br>
                        <form class="form-inline" style="margin:0px">

                            <div class="quantity">
                                <input type='button' value='-' class='minus' field='quantity' /><input type='text'
                                    name='quantity' value='0' class='qty' /><input type='button' value='+' class='plus'
                                    field='quantity' />
                            </div>
                            <a id="botonCotizar" rel="nofollow"
                                class="viewcart-style-2 button product_type_variable add_to_cart_button"
                                style="margin-right:3px;cursor: pointer;" onclick="cotizarModal()">Cotizar
                            </a>
                            <div class="spinner-border text-warning" role="status" id="spinner" style="display:none">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </form>
                        <div class="alert alert-success mensaje" role="alert" style="display:none">
                            Cotización realizada con exito
                        </div>
                        <div class="alert alert-danger mensajeError" role="alert" style="display:none">
                            Debe seleccionar tipo para poder cotizar.
                        </div>
                        <br>
                        <section class="mb-4" style="text-align:center;">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1 botones-social"
                                href="https://www.facebook.com/envases.vyp" role="button"><i
                                    class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1 botones-social" href="#!" role="button"><i
                                    class="fab fa-twitter"></i></a>

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
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
h2#exampleModalLabel {
    font-size: 1.875rem !important;
    line-height: 1.2 !important;
    color: #555 !important;
    letter-spacing: -.01em !important;
    font-weight: 700 !important;
    margin-bottom: .2em !important;
    width: calc(100% - 52px) !important;
    font-family: Poppins, sans-serif !important;
    text-align: center;
    color: #555;
}

a.nombreP {
    font-size: 1.875rem !important;
    color: #555;
}

.description-productos p {
    font-size: 1.1428em;
    line-height: 1.6875;
    letter-spacing: -.015em;
    text-align: justify;
}

.descripcionP {
    text-align: justify;
    font-size: 1.1428em;
    line-height: 1.6875;
    letter-spacing: -.015em;
    margin: 0 0 1.25rem;
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

.product_meta {
    margin: 1.2143em 0;
    clear: both;
    font-size: .8571em;
    text-transform: uppercase;
}

.sku_wrapper {
    display: block;
    margin-bottom: .25rem;
}

.sku {
    color: #222529;
    display: inline-block;
    font-weight: 700;
}

.posted_in {
    display: block;
    margin-bottom: .25rem;
}

.tipo {
    color: #222529;
    display: inline-block;
    font-weight: 700;
}

@media (max-width: 988px) {
    .bodyModal {
        display: flex !important;
        flex-direction: column !important;
    }

    .contenedorImagen {
        width: 100% !important;
    }
}

.botones-social {
    color: black !important;
    border-color: black !important;
}

.modal_producto {
    margin-top: 100px;
    overflow: hidden !important;
    overflow-x: hidden !important;
    overflow-y: hidden !important;
}

@media (max-height:948px) {
    .modal_producto {
        overflow: scroll !important;
        overflow-x: scroll !important;
        overflow-y: scroll !important;
    }
}
</style>

<script>
$("document").ready(function() {
    $(".contenedorImagen").parent().css("display", "flex");
    $(".contenedorImagen").parent().css("justify-content", "center");
    $(".contenedorImagen").parent().css("padding-left", "25px");
    $(".contenedorImagen").parent().css("padding-right", "25px");
    $(".contenedorImagen").parent().css("padding-bottom", "25px");
    $(".contenedorImagen").parent().css("margin-left", "25px");
    $(".contenedorImagen").parent().css("margin-right", "25px");
    $(".contenedorImagen").parent().css("margin-bottom", "25px");
})



jQuery(document).ready(function() {
    // This button will increment the value
    $(".plus").click(function(e) {

        e.preventDefault();

        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";

        // Get its current value
        var currentVal = parseInt($(field).val());

        // If is not undefined
        if (!isNaN(currentVal) && currentVal < 20) {

            // Increment
            $(field).val(currentVal + 1);

        }

    });

    // This button will decrement the value till 0
    $(".minus").click(function(e) {

        e.preventDefault();

        // Define field variable
        field = "input[name=" + $(this).attr("field") + "]";

        // Get its current value
        var currentVal = parseInt($(field).val());

        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 1) {
            // Decrement one
            $(field).val(currentVal - 1);
        }

    });
});

function cotizarModal() {
    //localStorage.clear();
    console.log("aqui");
    if ($("#select-tipo").val() == "") {
        $(".mensajeError").css("display", "block");
    } else {
        if ($('.qty').val() != 0) {
            $(".mensajeError").css("display", "none");
            $("#spinner").css("display", "block");
            setTimeout(function() {
                var elementId = $('#elementId').val();
                var elementName = $('#elementName').val();
                var elementQuantity = parseInt($('.qty').val());
                var elementimageUrl = $('#elementimageUrl').val();
                var elementId_tipo = "";
                var elementoUrl = $('#elementimageUrl').val();
                var idElement = elementId;
                var elementUrl = $('#elementUrl').val();
                var elementNombreTipo = $("#select-tipo option:selected").text();
                let basket = JSON.parse(localStorage.getItem('basket')); // Parse data from localstorage
                // element.imageUrl is a part of backend data received from JSON file
                // element.price is a part of backend data received from JSON file


                if (!basket) {
                    basket = [];
                }


                var tipo = $("#select-tipo").val();
                //console.log(tipo);
                // //console.log(tipo);
                if (tipo == undefined) {
                    tipo = "null";
                    //console.log("aqui tampoco entro");
                } else {
                    elementId = elementId + '_' + tipo;
                }
                // if(tipo != "" || tipo != undefined || tipo != 'undefined'){
                //     //console.log("aqui no entro");

                // }

                // find the index of the item if already in basket
                const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId === elementId);
                if (itemIndexInBasket !== -1) {
                    basket[itemIndexInBasket].elementQuantity = elementQuantity + parseInt(basket[
                        itemIndexInBasket].elementQuantity);
                } else {
                    //console.log(elementQuantity);
                    basket.push({
                        elementId,
                        elementName,
                        elementQuantity,
                        elementimageUrl,
                        elementUrl,
                        elementId_tipo,
                        tipo,
                        idElement,
                        elementNombreTipo
                    }); // Push not existing data to localstorage
                }
                localStorage.setItem('basket', JSON.stringify(basket));
                //console.log(JSON.parse(localStorage.getItem('basket')));
                $("#spinner").css("display", "none");
                $(".mensaje").css("display", "block");
                $('.qty').val(0);
                agregarItemCarrito();

            }, 2000);
            setTimeout(function() {
                $(".mensaje").css("display", "none");
            }, 5000);

        }

    }

}
</script>