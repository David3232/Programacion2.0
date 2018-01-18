<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
  </head>
  <body>
    <h1>Paises del mundo</h1>
    <?php
    $mysqli = new mysqli("localhost","root", "", "world");
    if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}
      $resultado = $mysqli->query("SELECT * FROM city");
      while($fila=$resultado->fetch_assoc()){
        echo $fila['Name']."<br>";
  	}

     ?>
  </body>
</html>
