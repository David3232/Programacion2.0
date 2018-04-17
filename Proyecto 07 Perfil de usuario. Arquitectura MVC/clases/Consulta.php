<?php
require_once 'clases/InteraccionBBDD';
/**
 *
 */
class Consulta
{

  function __construct()
  {
    $this->database=new Db();
    $this->database->conectar();
    $this->conector=$this->database->getConector();
  }
  public function validar(){
   if (empty($nombre) || empty($apellidos) || empty($edad) || empty($curso) || empty($puntuacion) ) {
     echo "<br>No dejes vacio ningun campo<br>";
     echo "<a href='insertarusuario.php'>Por favor vuelve a resgistrarte, gracias</a></p><br><br><br>";
   } else {
     $jugador = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
      $comprobarJugador = $this->conector->query($jugador);
      $contar = mysqli_num_rows($comprobarJugador);

      if ($this->conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " .$conexion->connect_error;
      } elseif ($contar >= 1) {
        echo "<br><p align = center>El nombre ya esta en uso</p><br>";
        echo "<a href='insertarUsuario.php'>Por favor vuelve a resgistrarte con otro nombre</a><br><br><br>";
      }
    }
  }
  public function insertar()
    {
   $registro = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";
   if ($this->conector->query($registro) === TRUE) {
     echo "<br><br><h1 align = center>Usuario creado correctamente</h1><br><br><br>";
    }
  }
  public function actualizar()
  {
    $actualizar = "UPDATE usuarios set nombre='$nombre', apellidos='$apellidos', edad=$edad, curso=$curso, puntuacion=$puntuacion where id=$id";
    if ($this->conector->query($registro) === TRUE) {
      echo "<br><br><h1 align = center>Usuario actualizado correctamente</h1><br><br><br>";
     }
  }
  public function borrar()
  {

  }
}
 ?>
