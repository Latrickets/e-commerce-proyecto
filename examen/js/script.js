document.addEventListener('DOMContentLoaded', event =>{
    
});

//var btnCarrito = getElementById("cart-btn");

// let btnnn = getElementById("cart-btn");
//-----------------------Carrito de compras------------------
if (document.addEventListener){
    window.addEventListener('load', actualizarCarrito, false);
}else {
    window.attachEvent('onload',actualizarCarrito);
}
function actualizarCarrito(){
    fetch('http://localhost/weeeeeb/examen/api/carrito/api-carrito.php?action=show')
    .then(response => response.json())
    .then(data => {
    console.log(data);
    
    let tablaCont = document.querySelector('#tabla');
    let precioTotal = '';
    let html = '';
    
    data.items.forEach(element =>{
        html += `
            <tr>
                <td id='imagenes'>
                    <img src='images/${element.imagen}' />
                </td>
                <td>
                    <p>${element.nombre}</p>
                    <p style="color: #009e0f">Envío estandar a domicilio</p>
                </td>
                <td class='botonB' id="botones">
                    <input type='hidden' value='${element.id}'/>
                    <p style="color: rgb(156, 153, 153)">${element.cantidad} películas</p>
                    <p style="color: rgb(156, 153, 153)">Costo: ${element.precio} mxn</p>
                    <!--<p style="color: rgb(156, 153, 153)">Subtotal $ ${element.subtotal} pesos</p>-->
                    <span><button class='btn-remove'>Eliminar 1 del carrito</button></span>
                </td>
                <td id="botones">
                    <p class="price-desc" style="font-size: 30px;">$${element.subtotal}</p>
                </td>
            </tr>
        `;
    });
    if(html != ``){
        precioTotal = `
        <tr id="penultima">
            <td></td>
            <td colspan=2 id="botones" style="text-align: right;">
                <p style="font-size: 30px;">Envío a 23085, La Paz BCS</p>
                <p style="font-size: 30px;">Total (con envío)</p>
            </td>
            <td id="botones">
                <p class="price-desc" style="font-size: 30px;">$100</p>
                <p class="price-desc" style="font-size: 30px;">$${data.info.total + 100}</p>
            </td>
        </tr>
        <tr id="ultima">
            <td></td>
            <td></td>
            <td></td>
            <td id="botones"><span><button>Continuar compra</button></span></td>
        </tr>
        <!--<p>Total: $${data.info.total}</p>-->
        `;
    }else{
        precioTotal = `<h2 style="font-size: 50px;">El carrito se encuentra vacio</h2>`
    }
        
        tablaCont.innerHTML = html + precioTotal ;

        //document.cookie = `items=${data.info.count}`;

        document.querySelectorAll('.btn-remove').forEach(boton =>{
           boton.addEventListener('click', e =>{
                const id = boton.parentElement.parentElement.children[0].value;
                console.log(id);
                removeItemCarrito(id);
           });
        });
        //
    });
} //fin actualizarCarrito
const botonesadd = document.querySelectorAll('.btn-add');

botonesadd.forEach(boton =>{
    const id = boton.parentElement.children[0].value;
    boton.addEventListener('click', e=>{
        addItemCarrito(id);
    });
})
function addItemCarrito(id){
    fetch('http://localhost/weeeeeb/examen/api/carrito/api-carrito.php?action=add&id=' + id)
    .then(res => res.json())
    .then(data =>{
        console.log(data.status);
        actualizarCarrito();
    });
}

function removeItemCarrito(id){
    fetch('http://localhost/weeeeeb/examen/api/carrito/api-carrito.php?action=remove&id=' + id)
    .then(res => res.json())
    .then(data =>{
        console.log(data.status);
        actualizarCarrito();
    });
}
//----------------------------------------------------------------------------------------







if(document.querySelector('#container-slider')){
    setInterval('funcionEjecutar("siguiente")',5000);
 }
 //------------------------------ LIST SLIDER -------------------------
 if(document.querySelector('.listslider')){
    let link = document.querySelectorAll(".listslider li a");
    link.forEach(function(link) {
       link.addEventListener('click', function(e){
          e.anteriorentDefault();
          let item = this.getAttribute('itlist');
          let arrItem = item.split("_");
          funcionEjecutar(arrItem[1]);
          return false;
       });
     });
 }
 
 function funcionEjecutar(side){
     let parentTarget = document.getElementById('slider');
     let elements = parentTarget.getElementsByTagName('li');
     let curElement, siguienteElement;
 
     for(var i=0; i<elements.length;i++){
 
         if(elements[i].style.opacity==1){
             curElement = i;
             break;
         }
     }
     if(side == 'anterior' || side == 'siguiente'){
 
         if(side=="anterior"){
             siguienteElement = (curElement == 0)?elements.length -1:curElement -1;
         }else{
             siguienteElement = (curElement == elements.length -1)?0:curElement +1;
         }
     }else{
         siguienteElement = side;
         side = (curElement > siguienteElement)?'anterior':'siguiente';
 
     }
     
     //PUNTOS INFERIORES
     let elementSel = document.getElementsByClassName("listslider")[0].getElementsByTagName("a");
     elementSel[curElement].classList.remove("item-select-slid");
     elementSel[siguienteElement].classList.add("item-select-slid");
     elements[curElement].style.opacity=0;
     elements[curElement].style.zIndex =0;
     elements[siguienteElement].style.opacity=1;
     elements[siguienteElement].style.zIndex =1;
 }
