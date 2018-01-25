<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost","root", "", "world");
    if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }else {
    $continent=$_POST["Continent"];
    $surfacearea=  $_POST["surfacearea"];
    $consulta="SELECT * FROM country Where continent='$continent' AND surfacearea>$surfacearea";
    $resultado = $mysqli->query($consulta);
    foreach ($resultado as $fila) {
    echo "El pais superior a la superficie indicada es ".$fila["Name"]."<br>";
    }
  }
     ?>
  </body>
</html>
