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
     $resultado = $conector->query("SELECT * FROM country order by Continent asc ");
     foreach ($resultado as $fila) {
        echo "El pais es ".$fila['Name']." y pertenece a ".$fila['Continent']."<br>";
      }
     ?>
  </body>
</html>
