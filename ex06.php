<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Exercice 6</title>
</head>
<body>
    <h1>Exercice 6</h1>

    <?php
    // Partie 1 : valeur fixe (change-la pour tester : 1, 3, 12, 15)
    $numeroMois = 3;

    echo "<h2>Mois numéro " . $numeroMois . "</h2>";

    switch ($numeroMois) {
        case 1:
            echo "<p>Janvier</p>";
            break;
        case 2:
            echo "<p>Février</p>";
            break;
        case 3:
            echo "<p>Mars</p>";
            break;
        case 4:
            echo "<p>Avril</p>";
            break;
        case 5:
            echo "<p>Mai</p>";
            break;
        case 6:
            echo "<p>Juin</p>";
            break;
        case 7:
            echo "<p>Juillet</p>";
            break;
        case 8:
            echo "<p>Août</p>";
            break;
        case 9:
            echo "<p>Septembre</p>";
            break;
        case 10:
            echo "<p>Octobre</p>";
            break;
        case 11:
            echo "<p>Novembre</p>";
            break;
        case 12:
            echo "<p>Décembre</p>";
            break;
        default:
            echo "<p>Numéro de mois invalide</p>";
    }

    // Partie 2 : mois courant du serveur
    $moisCourant = (int) date("m");

    echo "<h2>Mois courant (numéro " . $moisCourant . ")</h2>";

    switch ($moisCourant) {
        case 1:
            echo "<p>Janvier</p>";
            break;
        case 2:
            echo "<p>Février</p>";
            break;
        case 3:
            echo "<p>Mars</p>";
            break;
        case 4:
            echo "<p>Avril</p>";
            break;
        case 5:
            echo "<p>Mai</p>";
            break;
        case 6:
            echo "<p>Juin</p>";
            break;
        case 7:
            echo "<p>Juillet</p>";
            break;
        case 8:
            echo "<p>Août</p>";
            break;
        case 9:
            echo "<p>Septembre</p>";
            break;
        case 10:
            echo "<p>Octobre</p>";
            break;
        case 11:
            echo "<p>Novembre</p>";
            break;
        case 12:
            echo "<p>Décembre</p>";
            break;
        default:
            echo "<p>Numéro de mois invalide</p>";
    }
    ?>
</body>
</html>