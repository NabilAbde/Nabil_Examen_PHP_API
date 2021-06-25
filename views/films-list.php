<?php
require_once('controllers/films-list.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des films </title>
</head>

<body>

    <a href="AddProduct" title="Ajouter">Ajouter un nouveau film</a>
    <table style="border:1px solid black;width:100%;">
        <tr>
            <th style="text-align:left;">Titre</th>
            <th style="text-align:left;">Affiche</th>
            <th colspan="2" style="text-align:left;">Actions</th>
        </tr>
        <?php foreach ($aFilms as $listfilm) {


        ?>
            <tr>


                <td><?php echo $listfilm['title']; ?></td>
                <td><?php echo $listfilm['image']; ?></td>

                <td><a href="detail/<?php echo $listfilm["idfilm"]; ?>" title="details">Plus de details</a></td>
                <td><a href="form/<?php echo $listfilm["idfilm"]; ?>" title="Modifier">Modifier</a></td>
                <td><a href="/PHPSelect/api/produits/<?php echo $listfilm["idfilm"]; ?>" title="Supprimer">Supprimer</a></td>

            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>