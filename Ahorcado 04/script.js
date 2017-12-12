//Variable
var palabra0=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var letrahtml="";
var prueba="";
// Array
var array1 = ["patron","pez","ratones","gafa","rojo"];
aleatoria = Math.floor(Math.random()*(array1.length));
adivinar = array1[aleatoria];
console.log(adivinar);
// Estructuras de repeticion
for (var i = 0; i < adivinar.length; i++) {
    palabra0[i]='0';
}
// Funciones
function comprobar() {
  var letrahtml=document.getElementById("letrahtml");
  prueba= letrahtml.value;
  console.log(prueba);
  while (intentos<5 && aciertos<adivinar.length) {
  condicion=true;
    while (condicion) {
        if (isNaN(prueba)) {
          condicion=false;
        } else {
            document.getElementById("resultadohtml").value="Introduce un letra, no un numero";
            condicion=true;
          }
        }
      }
      var acertado=false;
      for (var i = 0; i < adivinar.length; i++) {
        if (adivinar.charAt(i)==prueba) {
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
