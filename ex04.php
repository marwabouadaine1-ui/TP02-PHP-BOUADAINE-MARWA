<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>

    <?php
    // Six variables de types différents
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;
    ?>

    <h2>1. Types et valeurs (var_dump)</h2>
    <pre>
<?php
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
?>
    </pre>

    <h2>2. Conversions</h2>
    <pre>
<?php
echo "\"42\" en entier : ";
var_dump((int) $chaine);

echo "15.8 en entier : ";
var_dump((int) $decimal);

echo "42 en chaîne : ";
var_dump((string) $entier);
?>
    </pre>

    <h2>3. true et false avec echo</h2>
    <p>true : <?php echo $vrai; ?></p>
    <p>false : <?php echo $faux; ?></p>

    <h2>4. true et false avec var_dump</h2>
    <pre>
<?php
var_dump($vrai);
var_dump($faux);
?>
    </pre>

    <h2>5. Conversions en booléen</h2>
    <pre>
<?php
echo "0 : ";
var_dump((bool) 0);

echo "\"0\" : ";
var_dump((bool) "0");

echo "\"PHP\" : ";
var_dump((bool) "PHP");

echo "tableau vide : ";
var_dump((bool) []);
?>
    </pre>
</body>
</html>