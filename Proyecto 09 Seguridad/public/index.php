<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\clases\Usuario;
$usuario=new Usuario();
$resultado=$usuario->findAllUsuario();
include_once 'views/indexviews.php';
?>
