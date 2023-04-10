<!-- 
* * * * *
* * * * *
* * * * * 
* * * * * 
* * * * * 
-->

<!-- Write a function that print above pattern  -->
<?php

function print_square($size){
    
    // Outer loop run to print rows 
    for($i= 1; $i <= $size; $i++){

     for($j=1; $j < $size; $j++){
       
        echo "*"."&nbsp;";
     }
        echo "</br>";
    }
}

$size= 6;

print_square($size);

?>