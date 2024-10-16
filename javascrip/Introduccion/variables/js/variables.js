/*1-Variables*/
//'use strict'//Esto es para que el lengueje sea mas sensible 
alert('hola hoy es mi cumple');
//2-Variables de tipo cadena
var pais = "<h1>Paraguay</h1>";
var continente = 'América';
//Concatenar
var p_c= pais + '-'+continente;

console.log(p_c);
document.write(pais+"<hr>");
document.write(continente);

//3-Modo estricto
//'use strict'
//4-Let permite definir variables limitando su alcanse
//5-var permite definir variables y utilizarlas globalmente

let varlet = "Esto es una variable let";
document.write("<br>"+varlet);

//6-Constantes Es una variable que no puede cambiar de valor 
//y se define con la palabra const

var web="https://www.utic.edu.py";
console.log(web);
const constweb="https://www.utic.edu.py/cire";
constweb="Otra página";
console.log(constweb);