// Variables
var numero=prompt("Dame un numero entre 2 y 6");
var comprobacion=true;
var asterisco="";
// Estructuras
while (comprobacion) {
  if (numero>=2 && numero<=6) {
    console.log("Num=",numero);
      for (var i = 1; i <= numero ; i++) {
        asterisco=asterisco+"*";
        console.log(asterisco);
    }
    comprobacion=false;
    }
  else {
      alert("Vuelve a intentarlo");
      numero=prompt("Dame un numero entre 2 y 6");
    }

}
