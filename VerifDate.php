<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Fonction DF</title>
</head>
<body>
<p>Voici la fonction pour convertir degré vers Fahrenheit : <BR>
    <?php
    function verificationdate($j,$m,$a)
    {
        if(checkdate($m,$j,$a))
        {
            $affichage = "La date est OK";
        }
        else
        {
            $affichage = "La date est invalide";
        }
        return $affichage;
    }
    echo verificationdate(16,18,1988)

    ?>
</body>
</html>