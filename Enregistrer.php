<?php

/* Imports */
require __DIR__ . '/class/Main-class.php';
require __DIR__ . '/class/Cinema-class.php';
require __DIR__ . '/includes/Resultat-form.php';
require __DIR__ . '/includes/Cinema-form.php';


/* Vérification du verbe HTTP */
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405); // Code HTTP Method Not Allowed (Verbe HTTP non autorisé)
    die(); // Arrêt du script
}


/* Récupération des valeurs du formulaire */
$choix = $_POST["choix"];
$date = $_POST["date"];
$place = $_POST["place"];
$tarif = $_POST["tarif"];

if ($choix === 1) {
    $choixFilm = $_POST["choixFilm"];
    $salle = $_POST["salle"];
    $ageMini = $_POST["ageMini"];
    $heureSeance = $_POST["heureSeance"];
}

/* Création de l'utilisateur */
if ($choix == 1) {
    $user = new Cinema($date, $place, $tarif, $choixFilm, $salle, $ageMini, $heureSeance);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>

<body>
    <?php if ($user == null) { ?>
        <p> Erreur lors de l'inscription </p>
    <?php } else {
        showResultats($choix, $user);
    } ?>
</body>

</html>