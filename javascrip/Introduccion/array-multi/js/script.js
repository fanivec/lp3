/*Array arreglos multidimencionales
Predeterminados en js
*/
'use strict'

var categorias = ["z","Accion", "Comedia", "Terror"];
var peliculas = ["Peli de acciòn", "Peli comedia", "Peli terror"];

var cine = [categorias, peliculas];
console.log(cine[0][1]);
console.log(cine[1][2]);

//Operaciones con array
//Añadir elementos push
peliculas.push("Batman");
console.log(peliculas);

//Quitar elementos pop
peliculas.pop();
console.log( peliculas);

//Añadir elementos con promt
var elemeto="";
do{
   elemeto = prompt("Introduce una peli");
   peliculas.push(elemeto);
}while(elemeto != "PARAR");

//Recorrer array y mostrar valores en pantalla
peliculas.forEach((pelis)=>{
    document.write("Peliculas: " + pelis + "<br>");
});

//Convertir array en texto
var pelistring = peliculas.join();
console.log(typeof pelistring, pelistring);

//Convertir texto a array
var cadena = "texto1, texto2, texto3";
console.log(cadena.split());

//Ordenar array en texto alfabetico
categorias.sort();
console.log(categorias);

//Invertir orden reverse
peliculas.reverse();
console.log(peliculas); 





