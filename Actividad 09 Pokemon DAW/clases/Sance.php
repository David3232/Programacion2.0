<?php
include 'clases/PokemonPadre.php';
class Sance extends PokemonPadre
{
  private $sue = 0;
  private $empanamiento = false;
  function __construct()
  {

  }
  public function getSue()
  {
      return $this->sue;
  }
  public function setSue($sue)
  {
      $this->sue = $sue;

      return $this;
  }
  public function getEmpanaiento()
  {
      return $this->$empanamiento;
  }
  public function setEmpanaiento($empanamiento)
  {
      $this->empanamiento = $empanamiento;

      return $this;
  }
  public function empanamiento()
  {
    $this->sue = rand(0,99);
    if ($this->sue > 50) {
      $this->empanamiento = true;
    }
  }
}

 ?>
