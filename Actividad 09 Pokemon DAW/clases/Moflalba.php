<?php
/**
 *
 */
class Moflalba extends PokemonPadre
{
  private $autodestruccion = 50;
  function __construct()
  {
$this->autodestruccion();
  }

  function autodestruccion ()
  {
    $this->autodestruccion = rand(0,25)
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
