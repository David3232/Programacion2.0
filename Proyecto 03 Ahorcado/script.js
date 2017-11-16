//Variable
var palabra0=[];
var condicion=true;
var condicion2=true;
var intentos=0;
var aciertos=0;
// Array
var array1 = ["patron","pez","ratones","gafa","rojo"];
aleatoria = Math.floor(Math.random()*(array1.length));
adivinar = array1[aleatoria];
console.log(adivinar);
// Estructuras de repeticion
for (var i = 0; i < adivinar.length; i++) {
    palabra0[i]='0';
}
while (intentos<5 && aciertos<adivinar.length) {
condicion2=true;
  var letrauser =prompt("Dame letra");
  while (condicion2) {
      if (isNaN(letrauser)) {
        condicion2=false;
      } else {
          var letrauser = prompt("Introduce un letra, no un numero"," ");
          condicion=true;
        }
      }
  var acertado=false;
  for (var i = 0; i < adivinar.length; i++) {
    if (adivinar.charAt(i)==letrauser) {
      palabra0[i]=adivinar.charAt(i);
      acertado=true;
      aciertos++;
      console.log(aciertos);
    } else {
    }
  }
  if (acertado==true) {
    alert("has acertado");
  } else {
    alert("letra no encontrada");
    intentos++;
  }
}
console.log(palabra0);
