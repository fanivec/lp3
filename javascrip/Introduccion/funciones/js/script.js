/*Funciones
Conjunto de instrucciones que se ejecutan cuando se las llaman
*/
//Definir una finciòn
function calculadora (){
    var mensaje = alert("Hola soy una funcion, me tenes que llamar par que funciones");

}
//Llamar a la funciòn
calculadora();

//Funciòn donde se pide ingresar valor
 function calcular(n1, n2, mostrar = false){
    if(mostrar == false){
        alert("Tener que activarme con true")

    }
    else{
        var suma = n1 + n2;
        return suma;
    }
 }

var nr1 = parseInt(prompt("Ingrese el valor 1 "));
var nr2 = parseInt(prompt("Ingrese el valor 2 "));
var mostrar = prompt("Mostrar");

alert(calcular(nr1, nr2, mostrar));

