<?php
function bonjour(){
    static $nombre = 0;
    echo 'Je vous ai déjà dit bonjour: ' .$nombre. ' fois aujourd\'hui<br>';
    $nombre++;
}

bonjour();
bonjour();
bonjour();
bonjour();
bonjour();
?>