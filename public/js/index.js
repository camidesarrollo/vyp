


function modalCotizar(urlimag, nombreP, idProducto, elementUrl){
$(".imagen-producto-pequeno ").attr("src",urlimag);
$("#nombreProducto").html(nombreP);
cotizar(idProducto,nombreP,1,urlimag, elementUrl);
}

function cotizarModalProducto(urlimag, nombreP, idProducto, elementUrl){
    cotizar(idProducto,nombreP,1,urlimag, elementUrl);
}

// function cotizar(elementId, elementName, elementQuantity, elementimageUrl, elementUrl, tipo = "null"){
//     console.log("entro aqui");
//     console.log(elementQuantity);
//     let basket = JSON.parse(localStorage.getItem('basket'));   // Parse data from localstorage
//                                                                // element.imageUrl is a part of backend data received from JSON file
//                                                             // element.price is a part of backend data received from JSON file
    

//     if (!basket) {
//     basket = [];
//     }
 
//     if(tipo != ""){
//         var elementId_tipo = elementId+"_"+tipo; 
//     }

//     // find the index of the item if already in basket
//     const itemIndexInBasket = basket.findIndex(basketEntry => basketEntry.elementId_tipo === elementId_tipo);
//     if (itemIndexInBasket !== -1) {
//         basket[itemIndexInBasket].elementQuantity = elementQuantity + parseInt(basket[
//             itemIndexInBasket].elementQuantity);
//     } else {
//     basket.push({elementId, elementName, elementQuantity, elementimageUrl, elementUrl, elementId_tipo, tipo});    // Push not existing data to localstorage
//     } 
//     localStorage.setItem('basket', JSON.stringify(basket));
//     console.log(JSON.parse(localStorage.getItem('basket')));
//     agregarItemCarrito();
// }
function mostrarLink(x){
    $("a#"+x).css("display","initial")
}

function ocultarLink(x){
    $("a#"+x).css("display","none")
    
}

// $( "#qty_fichaProducto" ).keyup(function() {
//     console.log($("#qty_fichaProducto").val());
// });

function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}

function obtieneID(option, tipo){
    switch(option){
        case 2:
            var splitipo = tipo.split("cm");
            var elementId = option+"_"+splitipo[0].replace(/ /g, "");
            return elementId;
        break;
    }
}