//Variable
var palabra0=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var letra=document.getElementById("letrahtml");
var salidajs=document.getElementById("salida");
var entradatxt="";
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
  entradatxt = letrahtml.value;
  letrahtml.value="";
  salida.value=entradatxt;
}
