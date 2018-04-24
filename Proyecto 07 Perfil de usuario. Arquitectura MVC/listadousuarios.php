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
    if (isset($_POST['insertar'])) {
      $insertarpost=$_POST['insertar'];
    } elseif (isset($_POST['actualizar'])) {
      $actualizarpost=$_POST['actualizar'];
      $insertarpost="";
    }else {
      $insertarpost="";
      $actualizarpost="";
    }
    $consulta = new Consulta();
    $bd = new InteraccionBBDD();
    $bd->conectar();
    if ($insertarpost == "insertar") {
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $consulta->insertar($nombre, $apellidos, $edad, $curso, $curso, $puntuacion);
  } elseif ($actualizarpost == "actualizar") {
      $id=$_POST["id"];
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $consulta->actualizar( $id, $nombre, $apellidos, $edad, $curso, $curso, $puntuacion);
  } else {
      $id=$_POST["id"];
      $consulta->borrar($id);
  }
  $consulta->lista();

     ?>
  </body>
</html>
