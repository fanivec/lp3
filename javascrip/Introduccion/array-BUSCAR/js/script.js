/*Array Bùsqueda
*/
'use strict'

var lenguajes = ["Javascrip", "Java", "PHP", "C++", "Python"];

//find
var buscarfind = lenguajes.find(lenguajes => lenguajes == "Java");
console.log(buscarfind);


//findIndex
var buscaindex = lenguajes.findIndex(lenguajes => lenguajes == "PHP");
console.log(buscaindex);

//Busquedas de valores numericos con some (devuelve true o false)
var numeros = [10,30,50,80,90,100,30];
var buscaposinrs = numeros.some(numeros => numeros >=130);
console.log(buscaposinrs);