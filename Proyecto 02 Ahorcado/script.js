// Sacar letra aleatoria
function randomletter(min,max) {
  return Math.random () * (max - min) + min;
}
// Variables
var letra = prompt("Introduce un letra"," ");
var letrarandom=String.fromCharCode(randomletter (97,122));
var condicion=true;
var contador= 0;
// Funcion de if
console.log(letrarandom);
while (condicion && contador<4) {
  if (isNaN(letra)) {
    condicion=false;
} else {
  var letra = prompt("Introduce un letra, no un numero"," ");
  condicion=true;
}
if (letra==letrarandom) {
  alert("Has acertado");
  condicion=false;
} else {
  alert("Has fallado");
  contador++
  letra = prompt("Introduce otra un letra"," ");
}
}

/*
El for sobra y se puede incorpor el numero de intentos
a compreobar dentro del while general
eliminar win y utilizar solo condicion
*/
