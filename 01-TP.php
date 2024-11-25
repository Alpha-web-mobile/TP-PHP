<?php
// DECLARATION VARIABLES 

$name = "Toto";
$age = 10;
$is_old = false;

echo   "Declared variables " . $name . "  " . $age . " " . $is_old . PHP_EOL;

// DISPLAY EVENT NUMBER 

$numbers = 20;

for ($i = 0; $i < $numbers; $i = $i + 2) {
    if ($i % 2  == 0) {
        echo "Event number" . " " . $i . PHP_EOL;
    }
}
