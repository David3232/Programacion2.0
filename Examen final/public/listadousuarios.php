<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\model\Consulta;
?>
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
    if ($insertarpost == "insertar") {
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $usuario=$_POST['usuario'];
      $contrasenya=$_POST['contrasenya'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $correo=$_POST['correo'];
      $consulta->insertar($nombre, $apellidos, $usuario, $contrasenya, $edad, $curso, $puntuacion, $correo);
  } elseif ($actualizarpost == "actualizar") {
      $id=$_POST["id"];
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $usuario=$_POST['usuario'];
      $contrasenya=$_POST['contrasenya'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $correo=$_POST['correo'];
      $consulta->actualizar( $id, $nombre, $apellidos, $usuario, $contrasenya, $edad, $curso, $puntuacion, $correo);
  } else {
      $id=$_POST["id"];
      $consulta->borrar($id);
  }
  $consulta->lista();

     ?>
  </body>
</html>
