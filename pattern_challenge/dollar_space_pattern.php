<?php
// $
// $$ $$
// $$$ $$$ $$$
// $$$$ $$$$ $$$$ $$$$

// Define the number of rows

$rows = 4;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$";
    }
    echo " ";
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "$";
    }
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "$";
    }
    echo " ";
    for ($j = 1; $j <= $i; $j++) {
        echo "$";
    }
    echo "\n";
}

?>


