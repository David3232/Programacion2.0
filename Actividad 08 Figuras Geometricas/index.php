<?php
echo "<h1>TRIANGULO</h1>";
include 'triangulo.php';
$Triangulo=new Triangulo();
$Triangulo->setalturaTriangulo(3);
echo "La altura del triangulo es: ".$Triangulo->getalturaTriangulo();
echo "<br>La base del triangulo es: ".$Triangulo->getbaseTriangulo();
echo "<br>El area del triangulo es: ".$Triangulo->areaTriangulo();
echo "<br>El perimetro del triangulo es: ".$Triangulo->perimetroTriangulo();
 ?>
<?php
echo "<h1>Cuadrado</h1>";
include 'Cuadrado.php';
$Cuadrado=new Cuadrado();
$Cuadrado->setladoCuadrado(4.5);
echo "El lado del cuadrado es: ".$Cuadrado->getladoCuadrado();
echo "<br>El area del cuadrado es: ".$Cuadrado->areaCuadrado();
echo "<br>El perimetro del cuadrado es: ".$Cuadrado->perimetroCuadrado();
 ?>
 <?php
 echo "<h1>Circulo</h1>";
 include 'Circulo.php';
 $Circulo=new Circulo();
 $Circulo->setradioCirculo(3);
 echo "El lado del Circulo es: ".$Circulo->getradioCirculo();
 echo "<br>El area del Circulo es: ".$Circulo->areaCirculo();
 echo "<br>El perimetro del Circulo es: ".$Circulo->perimetroCirculo();
  ?>
