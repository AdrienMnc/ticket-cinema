<?php

require_once __DIR__ . "/includes/Cinema-form.php"

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billeterie du Cinéma</title>
</head>

<body>

    <!-- Selection du formulaire adequate -->
    <form action="index.php" method="GET">

        <select name="selectType" id="" onChange="this.form.submit();">
            <option value="" selected> --- Choisissez votre type de séance --- </option>
            <option value="1">Cinéma</option>
            <option value="2">Théatre</option>

        </select>

    </form>

    <?php

    if (isset($_GET["selectType"])) {
        $choix = ceil($_GET["selectType"]);
    } else {
        $choix = null;
    }

    if ($choix == "1") { ?>

        <!-- Entrées les données du client -->
        <p>Formulaire Cinéma:</p>

        <?php showCinemaForm() ?>

    <?php } else if ($choix == "2") { ?>

        <!-- Entrées les données du vendeur -->
        <p>Formulaire Théatre:</p>
        <form action="" method="POST">

            <input type="text" name="nom" placeholder="Nom">

        </form>

    <?php } ?>

</body>

</html>