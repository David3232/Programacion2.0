<?php
require_once "InteraccionBBDD.php";
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
      $resultado = $this->conector->query("SELECT * FROM usuarios");
      foreach ($resultado as $fila) {
         echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
         echo "<a href='actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
         echo "<a href='BorrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
       }
    }
  public function insertar($nombre, $apellidos, $edad, $curso, $puntuacion)
  {
    $insertar = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";
    $registroinsertar = $this->conector->query($insertar);
  }
  public function actualizar($id, $nombre, $apellidos, $edad, $curso, $puntuacion)
  {
    $actualizar = "UPDATE usuarios set id=$id, nombre='$nombre', apellidos='$apellidos', edad=$edad, curso=$curso, puntuacion=$puntuacion where id=$id";
    $registroactualizar = $this->conector->query($actualizar);
  }
  public function borrar($id)
  {
    $borrar = "DELETE from usuarios where id=$id";
    $registroborrar = $this->conector->query($borrar);
  }
}
 ?>
