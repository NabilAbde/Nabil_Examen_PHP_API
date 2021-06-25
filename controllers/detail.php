<?php
require_once('models/film.php');

$Var = explode('/',$_SERVER["REQUEST_URI"]);
var_dump($Var);
$oFilm = new Film();
$dfilms = $oFilm->detailProduct($Var[3]);