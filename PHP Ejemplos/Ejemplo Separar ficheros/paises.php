<?php
  require_once 'config.php';
  require_once 'consultas.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    foreach ($resultado as $fila) {
       echo "El pais es ".$fila['Name']." y su superficie es de ".$fila['SurfaceArea']."<br>";
     }
    ?>
  </body>
</html>
