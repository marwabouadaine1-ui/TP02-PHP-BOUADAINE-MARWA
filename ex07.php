<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>

    <section>
        <h2>Table de multiplication de 7</h2>
        <?php
        $nombre = 7;

        for ($i = 1; $i <= 10; $i++) {
            echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre>
<?php
// Boucle externe : une itération par ligne (6 lignes)
for ($ligne = 1; $ligne <= 6; $ligne++) {
    // Boucle interne : autant d'étoiles que le numéro de la ligne
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "\n";
}
?>
        </pre>
    </section>
</body>
</html>