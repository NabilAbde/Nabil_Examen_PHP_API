<?php
require_once('controllers/detail.php');
//var_dump($dFilms);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Film</title>
</head>

<body>
    <h1>Film : <?php echo $dFilms->title; ?></h1>
    <h1>Catégorie<?php echo $dFilms->idCategory; ?></h1>
    <p>Resumé :<?php echo $dFilms->resume; ?></p>
    <p>Année de sortie :<?php echo $dFilms->Year; ?></p>
    <p>Affiche : <?php echo $dFilms->image; ?></p>
</body>

</html>