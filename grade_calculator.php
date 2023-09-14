<?php
    $test1 = 80;
    $test2 = 68;
    $test3 = 89;

    $average = ($test1 + $test2 + $test3) / 3;

    $grade = '';
        if ($average >= 80) {
                $grade = 'A';
            } elseif ($average >= 70) {
                $grade = 'B';
            } elseif ($average >= 60) {
                $grade = 'C';
    
            } elseif ($average >= 50) {
        
                $grade = 'D';
            
            } else {
                $grade = 'F';
            }

    echo "Test 1: $test1<br>";
    echo "Test 2: $test2<br>";
    echo "Test 3: $test3<br>";
    echo "Average: $average<br><br>";
    echo "Grade: $grade<br>";

