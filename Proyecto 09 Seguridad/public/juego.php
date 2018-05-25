<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\security\Session;
$selectOption = $_POST["usuario"];
$usuario=explode("-", $selectOption);
$session= new Session($usuario[0]);
include_once 'views/juegoviews.php';
