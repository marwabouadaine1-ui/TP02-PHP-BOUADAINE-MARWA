<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>

    <?php
    // Constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // Données de la commande
    $prixUnitaireHT = 60;
    $quantite = 3;

    // Calculs
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // Ajout des frais de livraison avec +=
    $fraisLivraison = 15;
    $montantFinal = $totalTTC;
    $montantFinal += $fraisLivraison;
    ?>

    <h2>Récapitulatif</h2>
    <ul>
        <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
        <li>TVA (<?= TAUX_TVA ?>%) : <?= $montantTVA . " " . DEVISE ?></li>
        <li>Total TTC : <?= $totalTTC . " " . DEVISE ?></li>
        <li>Frais de livraison : <?= $fraisLivraison . " " . DEVISE ?></li>
        <li><strong>Montant final : <?= $montantFinal . " " . DEVISE ?></strong></li>
    </ul>

    <?php
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'existe pas.</p>";
    }
    ?>
</body>
</html>