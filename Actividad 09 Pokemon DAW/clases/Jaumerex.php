<?php
include_once 'clases/PokemonPadre.php';
class Jaumerex extends PokemonPadre
{
  private $hiperactividad = 0;
  function __construct()
  {
    $this->hiperactividad();
  }

  public function hiperactividad()
  {
    $this->hiperactividad = rand(25,75);
    return $this->hiperactividad;
  }
  public function getHiperactividad()
  {
      return $this->hiperactividad;
  }
  public function setHiperactividad($hiperactividad)
  {
      $this->hiperactividad = $hiperactividad;

      return $this;
  }

}

 ?>
