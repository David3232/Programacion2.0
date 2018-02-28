    <?php
        $conector = new mysqli($server, $user, "", $db);
          if ($conector->connect_errno) {
            echo "Fallo al conectar a MySQL: " . $conector->connect_error;
          }
         $resultado = $conector->query("SELECT * FROM country WHERE country.Continent = 'South America'");
     ?>
