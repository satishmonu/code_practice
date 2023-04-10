<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    $time= explode(":", $s);
    $pos = strpos(end($time), 'PM');

    $hr;
    $min;
    $sec;
    // Check condition for AM
    if ($pos === false) {
        $hr= ($time[0] == 12) ? '00' : $time[0];
        $min= $time[1];
        $t= intval(end($time));
        $sec= ($t<10) ? "0$t": $t;
    }
     // Check condition for PM
    else{  
        $hr= ($time[0] == 12) ? 12 : 12+$time[0];
        $min= $time[1];
        $t= intval(end($time));
        echo $t;
        exit;
        $sec= ($t<10) ? "0$t": $t;
    }
echo $hr.':'.$min.':'.$sec;  
    
    
}


$s = '07:05:45PM';

timeConversion($s);



