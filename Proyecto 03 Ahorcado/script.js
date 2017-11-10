//Variable
var palabra0=[];
var condicion=true;
var cont=0;
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
while (cont<5) {
for (var i = 0; i < adivinar.length; i++) {
  var letrauser =prompt("Dame letra")
    if (adivinar.charAt(i)==letrauser) {
      palabra0[i]=adivinar.charAt(i);
    } else {
      cont++
      alert("has fallado")
    }
  }
}
console.log(palabra0);
