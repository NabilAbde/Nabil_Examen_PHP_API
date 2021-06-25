<?php

require_once('models/Film.php');

$oFilm = new Film();
    if (!empty($_POST)):
        $Add = $oFilm->AddFilm($_POST["idCategory"] , $_POST["title"] ,
        $_POST["resume"] );
       
    endif;
