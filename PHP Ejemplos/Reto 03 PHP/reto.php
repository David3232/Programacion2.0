<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    $conector = new mysqli("localhost", "root", "", "world");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      }
     $resultado = $conector->query("SELECT * FROM country order by surfacearea desc");
     foreach ($resultado as $fila) {
      	echo "El pais es ".$fila['Name']." y su superficie es de ".$fila['SurfaceArea']."<br>";
    	}

   ?>
  </body>
</html>
