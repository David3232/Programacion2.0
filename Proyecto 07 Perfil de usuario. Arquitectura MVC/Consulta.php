<?php
require_once "InteraccionBBDD.php";
/**
 *
 */
class Consulta
{
    private $bd;
    private $conector;

    function __construct()
    {
      $this->bd = new InteraccionBBDD();
      $this->bd->conectar();
      $this->conector=$this->bd->getConector();
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
  public function insertar()
  {
    $insertar = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";
    $registro = $this->conector->query($insertar);
  }
}
 ?>
