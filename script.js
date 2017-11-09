// Variables
var velocidades = [0,0,0];
var vel1=document.getElementById("velocidad1");
var vel2=document.getElementById("velocidad2");
var vel3=document.getElementById("velocidad3");
var rtdhtml=document.getElementById("velmed")
var veltotal=0;
var rtd=0;
// Funciones
function anadirvelocidades() {
  veltotal=0;
  velocidades[0]= parseInt(vel1.value);
  velocidades[1]= parseInt(vel2.value);
  velocidades[2]= parseInt(vel3.value);
  for (var i = 0; i < velocidades.length; i++) {
    veltotal=veltotal+velocidades[i]
  }
  rtd=veltotal/3;
  rtdhtml.value=rtd;
  console.log(veltotal);
  console.log(rtd);
}
