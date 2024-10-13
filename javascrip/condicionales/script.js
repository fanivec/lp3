/* Condicionales
if(condicion){
     bloque de instrucciones
}else{
    bloque de instrucciones
}
    else if(){

}

switch

Operadores de asignación compuestos
Nombre Operador abreviado Significado
Asignación x-y x-y
Asignación de adición x +- y x-x+y
Asignación de resta x -- y x-x-y
JAsignación de multiplicación x *- y x-x*y
Asignación de división x/-y x -x/y
Asignación de residuo x X- y x - x % y
Asignación de exponenciación x *- y x-x * y
Asignación de desplazamiento a la izquierda x <c- y x -x <y
Asignación de desplazamiento a la derecha x >>- y x-x>> y
Asignación de desplazamiento a la derecha sin signo x >>>- y
x-x>>> y
Asignación AND bit a bit x &- y x - x & y
x ^- y X- x ^ y
Asignacion XOR bit a bit
Asignación OR bit a bit x |- y x - x I y
Asignacion AND logico x 88- y x && (x - y)
Asignacion OR logico
x ||- y x || (x - y)
Asignacion de anulación lógica x ??- y x ?? (x- y)

*/
//if else y else if
var numero = 8;
if(numero<10){
    alert('El nro es: ' +numero);
}
else if(numero == 10){
    alert('El nro es: '+numero)
}
else{
    alert('El nro es: '+numero);

}

//switch

var edad = 80;
var imprimir = "";

switch(edad){
    case 18:
        imprimir = "Eres menos de edad";
        break;
    case 50:
        imprimir ="Ya eres adulto";
        break;
    case 80:
        imprimir = "Eres muy adulto";
        break;
    default:
        imprimir = "Tiene otra edad";

    
}
 document.write(imprimir);

