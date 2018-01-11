//Variable
var palabra0=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var boton=document.getElementById("button");
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
    var acertado=false;
    var entradatxt="";
    entradatxt = letrauser.value;
      console.log(palabra0);
      if (isNaN(entradatxt)) {
        for (var i = 0; i < adivinar.length; i++) {
          if (adivinar.charAt(i)==entradatxt) {
            palabra0[i]=adivinar.charAt(i);
            acertado=true;
            aciertos++;
            console.log(aciertos);
          }
        }   console.log(palabra0);
        }  else {
            salida.value="Mal";
          }
          if (acertado==true) {
            salida.value="Has acertado la letra";
          } else {
            salida.value="No has acertado";
            intentos++;
          }
          if (aciertos>=adivinar.length) {
            salida.value="Felicidades has acertado la palabra y es: "+adivinar
            boton=document.getElementById("button").disabled=true;
          } else if (intentos>=5) {
            salida.value="No lo has conseguido..."
            boton=document.getElementById("button").disabled=true;
          }
          letrauser.value="";
        }
