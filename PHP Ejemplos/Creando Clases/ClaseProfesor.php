<?php
  class ClaseProfesor
  {
  // Declarando propiedades
  public $atencion = 'Mucha';
  public $simpatia = 'Mucha';
    public function mostrarAtencion()
    {
      echo '<br>';
    	echo 'La atencion del profesor hacia sus alumnos es:';
    	echo $this-> atencion;
    	echo '<br>';
    }
  }

 ?>
