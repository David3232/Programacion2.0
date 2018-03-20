<?php
include 'clases/PokemonPadre.php';
class Moflalba extends PokemonPadre
{
  private $autodestruccion = 50;
  function __construct()
  {
$this->autodestruccion();
  }

  public function autodestruccion ()
  {
    $this->autodestruccion = rand(0,25);
  }
  public function getAutodestruccion()
  {
      return $this->autodestruccion;
  }
  public function setAutodestruccion($autodestruccion)
  {
      $this->autodestruccion = $autodestruccion;

      return $this;
  }

}

 ?>
