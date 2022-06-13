<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinema</title>
</head>

<body>
    <?php

    function showCinemaForm()
    { ?>

        <form action="Enregistrer.php" method="POST">

            <div>
                <label for="date">Date :</label>
                <input type="date" name="date" id="date" required>
            </div>

            <div>
                <label for="place">Nombre de place :</label>
                <input type="number" name="place" id="place" required>
            </div>

            <div>
                <label for="tarif">Tarif :</label>
                <select name="tarif" id="" required>
                    <option value="enfant">Enfant</option>
                    <option value="adulte">Adulte</option>
                </select>
            </div>

            <div>
                <label for="choixFilm">Veuillez choisir votre film :</label>
                <select name="choixDuFilm" id="" required>
                    <option value="nemo">Nemo</option>
                    <option value="topGun">Top Gun</option>
                    <option value="pornoulala">PORNOULALA</option>
                </select>
            </div>

            <input type="submit" value="Valider vos choix">
        </form>




    <?php } ?>

</body>

</html>