<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Fonction DF</title>
</head>
<body>
<p>Voici la fonction pour convertir degré vers Fahrenheit <BR>
<?php
function degresFahrenheit($C){
    $CF =(9/5)*$C+32;
    return $CF;
}
$degre = 36;
echo "La conversion de $degre degrés en Fahrenheit donne : ".degresFahrenheit($degre)." F."
?>
</body>
</html>