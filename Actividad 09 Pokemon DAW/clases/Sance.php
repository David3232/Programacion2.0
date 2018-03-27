<?php
include_once 'clases/PokemonPadre.php';
class Sance extends PokemonPadre
{
  private $sue = 0;
  private $empanamiento = 20;
  function __construct()
  {
    $this->Empanamiento();
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
  public function setEmpanamiento($empanamiento)
  {
      $this->empanamiento = $empanamiento;

      return $this;
  }
  public function getEmpanamiento()
  {
      return $this->empanamiento;
  }
  public function empanamiento()
  {
    $this->sue = rand(0,99);
    if ($this->sue > 50) {
      $this->empanamiento = 100;
  }
  return $this->empanamiento;
  }
}

 ?>
