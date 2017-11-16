// Sacar letra aleatoria
function randomletter(min,max) {
  return Math.random () * (max - min) + min;
}
// Variables
var letra = prompt("Introduce un letra"," ");
var letrarandom=String.fromCharCode(randomletter (97,122));
var condicion=true
var contador= 0;
// Funcion de if
console.log(letrarandom);
while (condicion) {
  if (isNaN(letra)) {
    condicion=false;
  for (var i = 0; i < 4; i++) {
    if (letra == letrarandom) {
    alert("Acertado");
    var win=true;
    i=4;
    } else {
    alert("No acertado");
    var letra = prompt("Introduce un letra"," ");
  }
  }
  if (win) {
    alert("Felicidades");
  } else {
    alert("Se te acabaron las oportunidades");
  }
} else {
  var letra = prompt("Introduce un letra, no un numero"," ");
  condicion=true;
}
}
