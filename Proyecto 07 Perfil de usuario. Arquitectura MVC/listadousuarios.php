<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="css.css">
    <a href="insertarusuario.php">INSERTAR USUARIO NUEVO</a>
    <?php
    $conector = new mysqli("localhost", "root", "", "juegos");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $id = $_POST["id"];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $curso = $_POST['curso'];
        $puntuacion = $_POST['puntuacion'];
        $consultainstert = "INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";
        $consultaupdate = "UPDATE usuarios set nombre='$nombre', apellidos='$apellidos', edad=$edad, curso=$curso, puntuacion=$puntuacion where id=$id";
        $consultadelete = "DELETE from usuarios where id=$id";
      $insertacion = $conector->query($consultainstert);
      $update = $conector->query($consultaupdate);
      $delete = $conector->query($consultadelete);
     $resultado = $conector->query("SELECT * FROM usuarios");
     foreach ($resultado as $fila) {
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Apellidos: </strong>".$fila['apellidos']."<br>"."<strong>Edad: </strong>".$fila['edad']."<br>"."<strong>Curso: </strong>".$fila['curso']."<br>"."<strong>Puntuacion: </strong>".$fila['puntuacion']."<br>";
        echo "<a href='actualizarUsuario.php?id=".$fila['id']."'> Actualizar</a> <br>";
        echo "<a href='BorrarUsuario.php?id=".$fila['id']."'> Borrar</a> <br> <br>";
      }
    }
     ?>
  </body>
</html>
