   <!-- 
   1
   1 2
   1 2 3
   1 2 3 4 
   1 2 3 4 5 
-->
 
<?php
function print_pattern($n){
 
    // outer loop runs for print rows
    for ($i = 1; $i <= $n; $i++){
     
    // inner loops runs for print column
     for($j = 1; $j < $i; $j++){
       
        echo $j;

     }
      echo "&nbsp; Row ".$i."</br>";

    }

}   
$n= 6;
print_pattern($n);

?>   
  


