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
    $code=$_POST["code"];
    $consulta="SELECT * FROM country where code='$code'";
    $resultado = $mysqli->query($consulta);
    foreach ($resultado as $key) {
    echo "El pais es".$key["Code"];
    }
    }
     ?>
  </body>
</html>
