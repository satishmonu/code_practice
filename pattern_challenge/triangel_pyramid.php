<!--     
            *
           *  *
         *  *  *
        *  *  *  *
      *  *  *  *  *
    
    -->

    <?php
     function print_triangle($size){

     for($i=1; $i <= $size; $i++){
          
        for($j= 1; $j <= $size-$i; $j++){
            echo "&nbsp;&nbsp;";
           
        }
        for($k =1; $k <= $i; $k++){
            echo "* &nbsp";
        }
           echo "<br>";
     }


     }

     $size = 5;
     print_triangle($size);

    ?>

