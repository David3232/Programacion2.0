// Variables
var num1=prompt("Dame un numero par:");
var num2=prompt("Dame otro numero par:");
var comprobador=true
// Estructuras
while (comprobador) {
  if (num1!=num2 & num1%2==0 & num2%2==0 & !isNaN(num1) & isNaN(num2)==false) {
    alert("Perfecto");
    comprobador=false
  } else {
    alert("Vuelve a intentarlo porfavor.")
    var num1=prompt("Dame un numero par:");
    var num2=prompt("Dame otro numero par:");
  }
}
