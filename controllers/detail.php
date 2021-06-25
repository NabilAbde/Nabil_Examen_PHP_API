<?php
require_once('models/film.php');

$Var = explode('/', $_SERVER["REQUEST_URI"]);
//var_dump($Var);
$oFilm = new Film();
$dFilms = $oFilm->detailFilm($Var[3]);
