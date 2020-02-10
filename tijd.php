<?php

    $input = $argv[1];
    if( strpos($input, "s")){
        $getal = (int)$input;
        echo($getal);
        echo(" seconden");
    }
    else {
        echo("geen tijd gevonden");
    }

?>