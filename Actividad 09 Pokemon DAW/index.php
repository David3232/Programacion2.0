<?php
include_once 'clases/Manjuc.php';
// Nuevo objeto
$Manjuc = new Manjuc();
$Manjuc -> setTipo('Agua');
$Manjuc -> setNombre('Manjuc');
$Manjuc -> setAtaque('Surf');
$Manjuc -> poder();
$Manjuc -> setNivelmax('86');
$Manjuc -> hambre();
echo "<h1>Manjuc</h1>";
echo "Nombre: ".$Manjuc->getNombre();
echo "<br>Tipo: ".$Manjuc->getTipo();
echo "<br>Ataque: ".$Manjuc->getAtaque();
echo "<br>Poder: ".$Manjuc->poder();
echo "<br>Ataque: ".$Manjuc->getNivelmax();
echo "<br>Hambre: ".$Manjuc->hambre();
 ?>
 <?php
 include_once 'clases/Sance.php';
 // Nuevo objeto
 $Sance = new Sance();
 $Sance -> setTipo('Hada');
 $Sance -> setNombre('Sance');
 $Sance -> setAtaque('Abrazo cariñoso');
 $Sance -> poder();
 $Sance -> setNivelmax('69');
 $Sance -> Empanamiento();
 echo "<h1>Sance</h1>";
 echo "Nombre: ".$Sance->getNombre();
 echo "<br>Tipo: ".$Sance->getTipo();
 echo "<br>Ataque: ".$Sance->getAtaque();
 echo "<br>Poder: ".$Sance->poder();
 echo "<br>Ataque: ".$Sance->getNivelmax();
 echo "<br>Empanamiento: ".$Sance->Empanamiento();
  ?>
  <?php
  include_once 'clases/Moflalba.php';
  // Nuevo objeto
  $Moflalba = new Moflalba();
  $Moflalba -> setTipo('Planta');
  $Moflalba -> setNombre('Moflalba');
  $Moflalba -> setAtaque('Veneno');
  $Moflalba -> poder();
  $Moflalba -> setNivelmax('99');
  $Moflalba -> getAutodestruccion();
  echo "<h1>Moflalba</h1>";
  echo "Nombre: ".$Moflalba->getNombre();
  echo "<br>Tipo: ".$Moflalba->getTipo();
  echo "<br>Ataque: ".$Moflalba->getAtaque();
  echo "<br>Poder: ".$Moflalba->poder();
  echo "<br>Ataque: ".$Moflalba->getNivelmax();
  echo "<br>Probabilidad de destruccion: ".$Moflalba->getAutodestruccion();
   ?>
   <?php
   include_once 'clases/Jaumerex.php';
   // Nuevo objeto
   $Jaumerex = new Jaumerex();
   $Jaumerex -> setTipo('Fuego');
   $Jaumerex -> setNombre('Jaumerex');
   $Jaumerex -> setAtaque('Mordisco');
   $Jaumerex -> poder();
   $Jaumerex -> setNivelmax('80');
   $Jaumerex -> hiperactividad();
   echo "<h1>Jaumerex</h1>";
   echo "Nombre: ".$Jaumerex->getNombre();
   echo "<br>Tipo: ".$Jaumerex->getTipo();
   echo "<br>Ataque: ".$Jaumerex->getAtaque();
     echo "<br>Poder: ".$Jaumerex->poder();
   echo "<br>Ataque: ".$Jaumerex->getNivelmax();
   echo "<br>Hiperactividad: ".$Jaumerex->hiperactividad();
    ?>
