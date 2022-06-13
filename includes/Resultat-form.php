<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultat</title>
</head>

<body>

    <?php

    /* Affichage du récapitulatif des tickets */

    function showResultats(string $choix, $user)
    { ?>

        <p> Votre Ticket de Cinéma </p>

        <table>

            <?php if ($choix === 1) { ?>
                <tr>
                    <th>Date de la séance</th>
                    <td><?= $user->date  ?></td>
                </tr>
                <tr>
                    <th>Nombre de place</th>
                    <td><?= $user->prix ?></td>
                </tr>
                <tr>
                    <th>Tarif</th>
                    <td><?= $user->tarif ?></td>
                </tr>
                <tr>
                    <th>Choix du film</th>
                    <td><?= $user->choixFilm ?></td>
                </tr>

                <tr>
                    <th>Salle n°</th>
                    <td><?= $user->salle ?></td>
                </tr>

                <tr>
                    <th>PEGGY</th>
                    <td><?= $user->ageMini ?></td>
                </tr>

                <tr>
                    <th>Adresse</th>
                    <td><?= $user->heureSeance ?></td>
                </tr>

            <?php } ?>

        <?php } ?>

</body>

</html>