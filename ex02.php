<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>

    <?php
    // Variables avec des données fictives
    $nom = "Alaoui";
    $prenom = "Sara";
    $age = 21;
    $formation = "Informatique";

    // Phrase construite avec la concaténation
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ". ";

    // Ajout avec .=
    $phrase .= "J'apprends PHP";

    echo "<p>" . $phrase . "</p>";

    // Deux variables différentes selon la casse
    $note = 12;
    $Note = 16;

    echo "<p>\$note = " . $note . "</p>";
    echo "<p>\$Note = " . $Note . "</p>";
    ?>
</body>
</html>