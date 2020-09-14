<?php
function test($nombre)
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < $nombre) {
        test($nombre);
    }
    $count--;
}

test();

?>