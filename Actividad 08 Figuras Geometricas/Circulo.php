<?php
/**
 *
 */
class Circulo
{
  private $radio=3;
  public $pi=3.14;
  function __construct()
  {

  }
  public function setradioCirculo($nuevoradio){
  $this->radio=$nuevoradio;
  }
  public function getradioCirculo(){
  return $this->radio;
  }
  public function areaCirculo()
  {
  return (($this->radio*$this->radio)*$this->pi);
  }
  public function perimetroCirculo()
  {
  return ($this->radio*4);
  }
}

 ?>
