/*Array arreglos
Predeterminados en js
*/
'use strict'

var nombre ="Fani Vera";
var nombres = ["Monserrat Vera", "Edison Vera", "Sofia Vera",
     "Mirian Acuña", 52, true
    ];
//Otra forma de establecer un array
var lenguajes = new Array("java", "PHP", "Javascrip", "Python", "c++");

console.log(nombres);
console.log(lenguajes);

//Acceder a elementos 
console.log("El lenguaje 2 es: "+lenguajes[2]);
//Imprimir un elemento ingresando en nro de indice
var seleccion = parseInt(prompt("Que lenguaje seleccionaras??", 0));
if(seleccion>=lenguajes.length){
    alert("Introduce un numero menor, no existe esa posiciòn"+ lenguajes.length);

}else{
    alert(lenguajes[seleccion]);
}
//Recorrer un array
//1 for
document.write("<h1>Imprimir elementos con for</h1>");
document.write("<ul>");
for(var i = 0; i < lenguajes.length; i++){
    document.write("<li>"+lenguajes[i]+"</li>");
}
document.write("</ul>");

//2 forech recomendada
document.write("<h1>Imprimir elementos con foreach</h1>");
document.write("<ul>");
    lenguajes.forEach((elemento, indice, array) => {
        console.log(elemento);
        console.log(indice);
        console.log(array);
        document.write("<li>"+"El indice es: " +indice+ "=" +elemento+ "</li>");
    });
//recorrer con for in
document.write("<h1>Imprimir elementos con for in</h1>");
document.write("<ul>");
for(let lenguaje in lenguajes){
    document.write("<li>"+"El lenguaje es: "+lenguajes[lenguaje] + "</li>");

}
document.write("</ul>");