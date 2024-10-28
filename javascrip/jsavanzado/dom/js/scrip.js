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

function cambiarcolor(color, color2){
    caja.style.background = color;
    otraforma.style.background = color2;
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
otraforma.style.color = "blue";
console.log(otraforma);

//Seleccionar elementos por etiquetas
var todoslosdiv = document.getElementsByTagName('div');
var valordivseleccionado = todoslosdiv[2].textContent;
console.log(valordivseleccionado);

var cambiarSeleccionado = todoslosdiv[2];
cambiarSeleccionado.style.background = "green";

//Recorrer todos los div con for in
var tododiv = document.getElementsByTagName('div');
var valor;
for(valor in tododiv){
    if(typeof tododiv[valor].textContent == 'string'){
        var parrafo = document.createElement("p");//crear parrafos
        var texto = document.createTextNode(tododiv[valor].textContent);
        parrafo.append(texto);
        console.log(parrafo);
        document.querySelector("#miseccion").append(parrafo);
   }


}

//Como llamar a elementos por su clase
var divclase = document.getElementsByName('miclase');
divclase[0].style.background = "yellow";