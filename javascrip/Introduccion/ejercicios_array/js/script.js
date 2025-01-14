/*Ejercicios arrays
*/
'use strict'

/* Crear un programa que:
1- Pida 6 nros ingresados por pantalla
2- Mostrar el array entero en el cuerpo de la pàgina y consola
3- Mostar array ordenado
4- Invertir el orden y mostrarlo
5- Mostrar cuantos elementos tiene
6- Buscar un valor introducido por el usuario y que nos muestre tambièn su ìndice 
*/

//Crear funciòn para imprimir los resultados en el cuerpo de la pàgina
function mostrarArray(elementos, texto=""){
    document.write("<h1>Contenido del  array" + texto +"</h1>");
    var resultado = numeros.forEach((elementos, indice) =>{
        document.write("<ul>")
        document.write("<li>"+ elementos + "</li>")
        document.write("</ul>")
    });
}

var numeros = new Array(6);

for(var i =0; i<numeros.length; i++){
    numeros[i] = parseInt(prompt("Introduce nros"));
}
document.write("<h1>Contenido del array</h1>");
var resultado = numeros.forEach((valores)=>{
   document.write("<ul>")
   document.write("<li>" + valores + "</li>")
   document.write("</ul>")
});

console.log(numeros);

//Mostrar y ordenarlo
var ordenar = numeros.sort(function(a,b) { return a-b });
console.log(ordenar);

//Invertir el orden y mostrarlo
numeros.reverse();
//Utilizar funciòn creada anteriormente
mostrarArray(numeros, " En orden reverso");

//Mostrar cuantos elementos tiene un array
document.write("<h1> El array tiene; </h1>" + numeros.length + "elementos </h1>")

//Buscar un valor introducido por el usuario y que nos muestre tambien su indice
var busqueda = parseInt(prompt("Busca numeros", 0));
var posicion = numeros.findIndex(numeros => numeros == busqueda);
var valor = numeros.find(numeros => numeros == busqueda);
if(posicion && posicion !=-1){
    document.write("El valor es: " + valor+ " y la posicion esta en: " +posicion)
}else{
    document.write("No encontrado o no es un nro");
}
