/*DOM
Document Objet Model 
El DOM se aplica a las etiquetas HTML mediante el atributo id
En el caso de utilizar DOM las etiquetas  html <script> se inicializan antes del
finalizar el body
*/
//Ingresar el elemento por su id
//var caja = document.getElementById("micaja").innerHTML = ("Texto cambiado con DOM");
//console.log(caja); 
'use strict'

function cambiarcolor(color){
    caja.style.background = color;
    otraforma.style.background = color;
}

var caja = document.getElementById("micaja");
caja.innerHTML = "Texto cambiado por segunda vez!";
caja.style.background = "red";
caja.style.padding = "20px";
caja.style.color = "white";
caja.className = "micajaconclase";
console.log(caja);

//Seleccionar elementos querySelector
var otraforma = document.querySelector("#micaja2");
console.log(otraforma);
