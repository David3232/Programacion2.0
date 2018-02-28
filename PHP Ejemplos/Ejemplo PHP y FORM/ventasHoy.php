<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost", "root", "", "tienda");
      if ($conector->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conector->connect_error;
      } else {
        $id=$_POST['id'];
        $articulo=$_POST['articulo'];
        $precioUd=$_POST['precioUd'];
        $uds=$_POST['uds'];
        $fecha=$_POST['fecha'];
        $consulta="INSERT INTO Ventas (id,articulo,precioUd,uds,fecha) values ($id,'$articulo',$precioUd,$uds,'$fecha')";
      $insertacion = $conector->query($consulta);
     $resultado = $conector->query("SELECT * FROM Ventas where fecha=curdate()");
     foreach ($resultado as $fila) {
       echo "ID:".$fila['id']."<br> Articulo:".$fila['articulo']."<br> Precio Unidad:".$fila['precioUd']."<br> UDS:".$fila['uds']."<br> Fecha:".$fila['fecha'];
      }
    }
     ?>
  </body>
</html>
