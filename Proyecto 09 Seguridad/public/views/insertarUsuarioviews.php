<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina Insertar Usuario</title>
        <style media="screen">
    body{
      background-color:#B8860B;
    }
    </style>
  </head>
  <body>
<h3>Insertar Usuario</h3>

<form class="" action="insertarUsuario.php" method="post" onsubmit="validar()">
<label for="nombre">Nombre: </label>  <input type="text" name="nombre" id="nombre" value="" onFocus="this.value=''"><br>
<label for="apellidos">Apellidos: </label>  <input type="text" name="apellidos" id="apellidos" value="" onFocus="this.value=''"><br>
<label for="edad">Edad: </label>  <input type="text" name="edad" id="edad" value="" onFocus="this.value=''"><br>
<label for="curso">Curso: </label>  <input type="text" name="curso" id="curso" value="" onFocus="this.value=''"><br>
<label for="puntuacion">Puntuacion: </label>  <input type="text" name="puntuacion" id="puntuacion" value="" onFocus="this.value=''"><br>
<label for="correo">Correo: </label>  <input type="text" name="correo" id="correo" value="" onFocus="this.value=''"><br>
<input type="hidden" name="insertar" value="insertar">
<input type="submit" onclick="validar" name="insertar" value="insertar" class="boton">
</form>

      <br>
      <a href="index.php">
        <input type='submit' value="Volver">
      </a>

  </body>
</html>
