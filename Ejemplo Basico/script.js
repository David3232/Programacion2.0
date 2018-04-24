var cantidad = "";
var numeroaleatorio = Math.floor(Math.random() * (19 - 10)) + 10;

function traer(){
  var numaleat = [];
  //Rellenar array con numeros aleatorios
  var cantidad = document.getElementById("hola").value;
  for (var i = 0; i < cantidad; i++) {
    var numeroaleatorio = Math.floor(Math.random() * (19 - 10)) + 10;
    numaleat[i] = numeroaleatorio;
  }
  // Sacar array por pantalla
  result.value=""; /*Esto sirve para no acumular el resultado de el alterior array*/
  for (var i = 0; i < numaleat.length; i++) {
    result.value =result.value + numaleat[i] + " ";
    console.log(numaleat[i]);
  }
  // Sacar suma del contenido del array
  var suma = 0;
  for (var i = 0; i < numaleat.length; i++) {
    var suma = suma + numaleat[i];
  }
  resultsuma.value = suma;
  // Sacar media del contendio del array
  var media = 0;
  media = suma/numaleat.length;
  resultmedia.value = media;
  // Sacar maximo del contendio del array
  resultmax.value = Math.max.apply(null, numaleat);
  // Sacar minimo del contendio del array
  resultmin.value = Math.min.apply(null, numaleat);
}
