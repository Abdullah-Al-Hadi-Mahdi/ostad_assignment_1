<?php

    $num1 = 48; 
    $num2 = 12; 
    $operation = "division";

        if ($operation === "addition") {
            $result = $num1 + $num2;
        }
            elseif ($operation === "subtraction") {
                $result = $num1 - $num2;
            }
                elseif ($operation === "multiplication") {
                $result = $num1 * $num2;
                 }
                    elseif ($operation === "division") {
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } 
                    } 

    echo "num 1 : $num1<br>";
    echo "num 2 : $num2 <br>";
    echo "operation : $operation <br><br>";
    echo "result : $result <br>";
