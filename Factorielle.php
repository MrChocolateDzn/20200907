<?php
function factorielle($nombre)
{
    if($nombre === 0) // condition d'arret
        return 1;
    else
        return $nombre*factorielle($nombre-1);
}

echo factorielle($nombre = 3);
?>