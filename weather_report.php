<?php
    $temperature = 25;   
    if ($temperature <= 0) {
        echo "It's freezing!";
    } elseif ($temperature <= 15) {
        echo "It's cool.";
    } elseif ($temperature <= 30) {
        echo "It's warm.";
    } else {
        echo "It's hot!";
    }
    ?>