<?php
namespace Daw\model;
use Daw\model\InteraccionBBDD;
/**
 *
 */
class Consulta extends InteraccionBBDD
{
    private $bd;
    private $conector;

    function __construct()
    {
      parent::__construct();
      parent::conectar();
      $this->conector=parent::getConector();
    }
  public function lista()
    {
      $consulta="SELECT * FROM usuarios";
      $resultado = $this->conector->query($consulta);
      foreach ($resultado as $fila) {
         echo "<strong>ID:</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Usuario:</strong> ".$fila['usuario']."<br>"."<strong>Contraseña:</strong> ".$fila['contrasenya']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>";
         echo "<strong>Curso:</strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>"."<strong>Correo:</strong> ".$fila['correo']."<br>";
         echo "<a href='actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
         echo "<a href='BorrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
       }
    }
  public function insertar($nombre, $apellidos, $usuario, $contrasenya, $edad, $curso, $puntuacion, $correo)
  {
    $insertar = "INSERT INTO usuarios (nombre,apellidos,usuario,contrasenya,edad,curso,puntuacion,correo) values ('$nombre','$apellidos','$usuario','$contrasenya',$edad,$curso,$puntuacion,'$correo')";
    $registroinsertar = $this->conector->query($insertar);
  }
  public function actualizar($id, $nombre, $apellidos, $usuario, $contrasenya, $edad, $curso, $puntuacion, $correo)
  {
    $actualizar = "UPDATE usuarios set id=$id, nombre='$nombre', apellidos='$apellidos', usuario='$usuario', contrasenya='$contrasenya', edad=$edad, curso=$curso, puntuacion=$puntuacion, correo='$correo' where id=$id";
    $registroactualizar = $this->conector->query($actualizar);
  }
  public function borrar($id)
  {
    $borrar = "DELETE from usuarios where id=$id";
    $registroborrar = $this->conector->query($borrar);
  }
}
 ?>
