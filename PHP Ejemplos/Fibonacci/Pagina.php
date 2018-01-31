<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      $suma=0;
      $actual=0;
      $anterior=1;
      echo "<table border=2>";
      echo "<tr>";
      echo "<td>";
      echo "Iteracion";
      echo "</td>";
      echo "<td>";
      echo "Fibonucci";
      echo "</td>";
      echo "</tr>";
      for ($i=1; $i <= 19 ; $i++) {
        echo "<tr>";
        echo "<td>";
        echo $i;
        echo "</td>";
        echo "<td>";
        echo $suma;
        echo "</td>";
        echo "</tr>";
        $suma = $anterior + $actual;
        $anterior = $actual;
        $actual = $suma;
      }
      echo "</table>";
       ?>
  </body>
</html>
