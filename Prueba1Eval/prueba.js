//Variable
var comodin=[];
var palabra0=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var intentosdeseados = prompt("¿Cuantos intentos quieres tener? Eligelo tu mismo del 5 al 10!")
// Array
var array1 = ["patron","pez","ratones","gafa","rojo"];
aleatoria = Math.floor(Math.random()*(array1.length));
adivinar = array1[aleatoria];
console.log(adivinar);
// Estructuras de repeticion
// Modificacion 01 {
while (condicion) {
if (isNaN(intentosdeseados)) {
  intentosdeseados = prompt("Por favor, tiene que ser desde el numero 5 hasta el numero 10. No me des una letra.");
}
else if (intentosdeseados>10 || intentosdeseados<5) {
  intentosdeseados = prompt("Por favor, tiene que ser desde el numero 5 hasta el numero 10. No hagas trampas.");
}else {
  condicion=false;
}
}
// Modificacion 01 }
for (var i = 0; i < adivinar.length; i++) {
    palabra0[i]='0';
}
while (intentos<intentosdeseados && aciertos<adivinar.length) {
condicion=true;
  var letrauser =prompt("Dame letra");
// Modificacion 02 {
  if (letrauser=="FIN") {
    intentos=1000;
    alert("Juego finalizado.")
  } else {
// Modificacion 02 } (Hay que tener en cuenta que la llave la debemos cerrar abajo, aunque ponga con este comentario que este trozo es la modificacion 02)
// Modificacion 03 {
if (letrauser=="COMODIN") {
  for (var i = 0; i < adivinar.length; i++) {
  if (palabra0[i]==0){
    comodin[i]=adivinar.charAt(i);
  }
  }
  var comoaleat = Math.floor(Math.random()*(comodin.length));
  var letracomodin = comodin[comoaleat];
  console.log(letracomodin);
  for (var i = 0; i < adivinar.length; i++) {
    if (adivinar[i]==letracomodin) {
      palabra0[i]=letracomodin;
      aciertos++;
    }
  } console.log(palabra0);
  } else {
// Modificacion 03 } (Teniendo encuenta la misma caracteristica que en el 02, que cerramos el else mas abajo)
  while (condicion) {
      if (isNaN(letrauser)) {
        condicion=false;
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
    }
  }
  if (acertado==true) {
    alert("has acertado");
  } else {
    alert("letra no encontrada");
    intentos++;
  }
  }
  }
}
if (aciertos>=adivinar.length) {
  alert("Felicidades has acertado la palabra y es: "+adivinar)
} else {
  alert("No lo has conseguido...")
}
console.log(palabra0);
