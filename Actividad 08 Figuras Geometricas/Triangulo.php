<?php
/**
 *
 */
class Triangulo
{
  private $base=5.2;
  function __construct()
  {

  }
  public function setalturaTriangulo($nuevaaltura){
    $this->altura=$nuevaaltura;
  }
  public function getalturaTriangulo(){
    return $this->altura;
  }
  public function getbaseTriangulo(){
    return $this->base;
  }
  public function areaTriangulo(){
    return ($this->base*$this->altura)/2;
  }
  public function perimetroTriangulo(){
    return ((2 * $this->altura) + $this->base);
  }
}
 ?>
