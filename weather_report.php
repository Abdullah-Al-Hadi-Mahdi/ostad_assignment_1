<?php

    $celsiusTemp = 25;
    $classification = "";

    if ($celsiusTemp >= 30) {
            $classification = "It's hot.";
        } elseif ($celsiusTemp >= 20 && $celsiusTemp < 30) {
            $classification = "It's warm.";
        } elseif ($celsiusTemp >= 10 && $celsiusTemp < 20) {
            $classification = "It's cool.";
        } else {
            $classification = "It's freezing!";
        }

    echo "Temperature: $celsiusTemp °C<br><br>";
    echo "Classification: $classification<br>";