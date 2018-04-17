<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="css.css">
    <a href="insertarusuario.php">INSERTAR USUARIO NUEVO</a>
    <br>
    <?php
    require_once 'Consulta.php';
    require_once 'InteraccionBBDD.php';
    $consulta = new Consulta();
    $bd = new InteraccionBBDD();
    $bd->conectar();
    $consulta->lista();

     ?>
  </body>
</html>
