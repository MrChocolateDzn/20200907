<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Fonction DF</title>
</head>
<body>
<p>Voici la fonction pour convertir degré vers Fahrenheit : <BR>
<?php
function degresFahrenheit($C){
    $CF =(9/5)*$C+32;
    return $CF;
}
$degre = 36;
echo "La conversion de $degre degrés en Fahrenheit donne : ".degresFahrenheit($degre)." F.<BR>";

function Fahrenheitdegre($F){
    $FC =($F-32)*5/9;
    return $FC;
}
$degre1 = 95;
echo "La conversion de $degre1 degrés Fahrenheit vers degrés donne : ".Fahrenheitdegre($degre1)." C."
?>
</body>
</html>