<!-- 
*
* *
* * *
* * * *
* * * * * 
-->
<?php

function print_pattern($n){
 
    for($i =1; $i <= $n; $i++){
     
        for($j=0; $j < $i; $j++){

            echo "*";

        }

        echo "</br>";
    }
    for($i =1; $i <= $n; $i++){
     
        for($j=5; $j > $i; $j--){

            echo "*";

        }

        echo "</br>";
    }   
    
}

$n = 5;
print_pattern($n);

?>
