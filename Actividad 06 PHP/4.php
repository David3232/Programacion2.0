<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $estrellitas="*";
        // echo "$estrellitas <br>";
        // for ($i=0; $i <= 5 ; $i++) {
          // $estrellitas=$estrellitas."**";
          // echo "$estrellitas <br>";
        // }
        $a=0;
        do {
          echo "$estrellitas <br>";
          $estrellitas=$estrellitas."**";
          $a++;
        } while ($a <= 3);
        while ($a >= 3) {
          $estrellitas=$estrellitas."**";
          echo "$estrellitas <br>";
          $a--;
        }
     ?>
  </body>
</html>
