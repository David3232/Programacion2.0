<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figura 5</title>
  </head>
  <body>

    <h1>
      <?php
        $lineas = 5;
        for ($i=1; $i <= $lineas ; $i++) {
          for ($j=1; $j <= ($lineas - $i)+2 ; $j++) {
            echo "&nbsp";
          }
          for ($j=0; $j < ($i * 2)-1 ; $j++) {
            echo "*";
          }
            echo "<br>";
        }
      ?>
    </h1>
  </body>
</html>
