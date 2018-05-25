<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\clases\Usuario;
include_once 'views/insertarUsuarioviews.php';
if(isset($_POST["insertar"])){
  $usuario=new Usuario();
  $usuario->insertUsuarioinsert($nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'],$puntuacion=$_POST['puntuacion'],$correo=$_POST['correo']);
}

?>
