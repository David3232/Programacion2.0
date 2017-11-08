//Variable
var palabra0=[];
var condicion=true;
var letrauser= prompt("Dame una letra:")
// Array
var array1 = ["Patron","Peluqueria","Raton","Gafas","Zapatillas"];
aleatoria = Math.floor(Math.random()*(array1.length));
adivinar = array1[aleatoria];
console.log(adivinar);
console.log(array1);
// Estructuras de repeticion
for (var i = 0; i < adivinar.length; i++) {
    palabra0[i]='0';
}
console.log(palabra0);
