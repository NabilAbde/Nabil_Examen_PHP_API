<?php
require_once('controllers/detail.php');
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
    <h1><?php echo $dFilms->title; ?></h1>
    <h1><?php echo $dFilms->idCategoy; ?></h1>
    <p><?php echo $dFilms->description; ?></p>
    <p><?php echo $dFilms->Year; ?></p>
    <p><?php echo $dFilms->image; ?></p>
</body>

</html>