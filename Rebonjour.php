<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TableauNote</title>
</head>
<body>
<p>L'élève Major a obtenu les notes : 17, 19, 18, 20<BR>
    <?php
    $notes = array(17,19,18,20);

    for($i=0; $i <= 3; $i++) {
        $j=$i+1;
        echo "La note numero $j est ".$notes[$i]."<BR>";
    }
    ?>
</body>
</html>