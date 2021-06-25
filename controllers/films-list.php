<?php
require_once('models/film.php');
$oFilm = new Film();
$aFilms = $oFilm->listFilm();
