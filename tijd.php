<?php

    $input = $argv[1];
    if( strpos($input, "s")){
        $getal = (int)$input;
        echo($getal." seconden");
    }
    else {
        echo("geen tijd gevonden");
    }

?>