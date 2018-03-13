<?php
/**
 *
 */
class Cuadrado
{
  private $lado = 4.5;
  function __construct()
  {

  }
  public function setladoCuadrado($nuevolado){
  $this->lado=$nuevolado;
  }
  public function getladoCuadrado(){
  return $this->lado;
  }
  public function areaCuadrado()
  {
  return ($this->lado*$this->lado);
  }
  public function perimetroCuadrado()
  {
  return ($this->lado*4);
  }
}

 ?>
