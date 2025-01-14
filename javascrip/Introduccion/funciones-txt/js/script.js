/* Fuciones
Predeterminada en js
*/
//Funciones para transformar textos
var numero = 888;
var text1 = "  Bienvenidos al curso de javascrip  ";
var texto2 = " TEXTO EN MAYÙSCULA";

//1- Transformar de nro a string
var nroconvertido = numero.toString();
console.log(nroconvertido);
console.log(typeof(nroconvertido));

//Cambiar valores de minuscula a mayùscula
var text1MAYUS = text1.toUpperCase();
console.log(text1MAYUS);

//Cambiar valores de mayùscula minuscula
var text2minu = texto2.toLocaleLowerCase();
console.log(text2minu);

//Longitud de un string
var longitud = "Fani Vera";
console.log(longitud.length);

//Concatenar
console.log(text1+texto2);

//array longitud
var array=["hola","còmo","estàs?"];
console.log(array.length);

//Buscar por indice
var busqueda = text1.indexOf("curso");
console.log(busqueda);

//Buscar por indice 2
var busqueda2 = text1.lastIndexOf("de");
console.log(busqueda2);

//Buscar por indice 3
var busqueda3 = text1.search("javascrip");
console.log(busqueda3);

//match
var busqueda4 = text1.match("al");
console.log(busqueda4);

//  Quitar palabras de adelante o de atras
var sustraerespacios = text1.substr(13, 5);
console.log(sustraerespacios);

//Quitar letra
var quitar = text1.charAt(2);
console.log(quitar);

//Busqueda con startswith cuando las palabras inician con un valo
//esto devuelve true o false

var busqueda5 = text1.startsWith("Bienve");
console.log(busqueda5);

//includes
var busqueda6 = text1.includes("javascrip");
console.log(busqueda6);

// Reemplazar una palabra por otra
var reemplazar = text1.replace("javascrip", "java");
console.log(reemplazar);

//borrar una parte y devolver el valor indicado
var borrarparte = text1.slice(12, 20);
console.log(borrarparte);

//split convertir textp en array
var textarray = text1.split();
var textarray = text1.split(" ");
console.log(textarray);

//Quitar espacios con trin
var quitarespacios = text1.trim();
console.log(quitarespacios);

//Uso de plantillas
var nombre = prompt("Ingrese el nombre");

var apellido = prompt("Ingrese el apellido");
 
var plantilla = `
<h1>Hola que tal</h1>
<h3>el nombre es: ${nombre}</h3>
<h3>el apellido es: ${apellido}</h3>
`;

document.write(plantilla);

