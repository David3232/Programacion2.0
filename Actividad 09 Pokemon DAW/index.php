<?php
include 'clases/Manjuc.php';
// Nuevo objeto
$Manjuc = new Manjuc();
$Manjuc -> setTipo('Agua');
$Manjuc -> setNombre('Manjuc');
$Manjuc -> setAtaque('Surf');
$Manjuc -> setNivelmax('86');
$Manjuc -> hambre();
echo "<h1>Manjuc</h1>";
echo "Nombre: ".$Manjuc->getNombre();
echo "<br>Tipo: ".$Manjuc->getTipo();
echo "<br>Ataque: ".$Manjuc->getAtaque();
echo "<br>Ataque: ".$Manjuc->getNivelmax();
echo "<br>Hambre: ".$Manjuc->hambre();
 ?>
