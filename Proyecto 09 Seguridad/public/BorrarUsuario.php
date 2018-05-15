<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="listadousuarios.php" method="post">
      Si esta seguro de que quiere borrar este usuario pulse en este boton: <input type="submit" name="BORRAR" value="BORRAR">
      <input type="hidden" name="id" value="<?= $_GET["id"]?>">
      <input type="hidden" id="borrar" name="borrar" value="borrar">
    </form>
  </body>
</html>
