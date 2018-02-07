<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost","root", "", "world");
    if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }else {
    $consulta="SELECT CountryCode, Language from countrylanguage";
    $resultado = $mysqli->query($consulta);
    echo "<table border=2>";
    foreach ($resultado as $key) {
      echo "<tr>";
      echo "<td>";
      echo $key['Language'];
      echo "</td>";
      echo "<td>";
      echo $key['CountryCode'];
      echo "</td>";
      echo "</tr>";
      }
    }
    echo "</table>";
     ?>
  </body>
</html>
