<?php
/**
 *
 */
class PokemonPadre
{
    private $tipo = "Hada";
    private $nombre = "Sance";
    private $ataque = "Rayo de amor";
    private $nivelmax = 100;
    private $poder = 0;
    function __construct()
    {
      $this->poder();
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getAtaque()
    {
        return $this->ataque;
    }
    public function setAtaque($ataque)
    {
        $this->ataque = $ataque;

        return $this;
    }
    public function getNivelmax()
    {
        return $this->nivelmax;
    }
    public function setNivelmax($nivelmax)
    {
        $this->nivelmax = $nivelmax;

        return $this;
    }
    public function poder(){
      $this->poder = rand(50,100);
      return $this;
    }
}

 ?>
