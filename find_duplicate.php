<?php
$unique_array = ['apple', 'banana', 'custard', 'denmark', 'banana', 'apple', 'banana', 'denmark'];
$duplicate =array();

foreach($unique_array as $key=>$value){

    if(in_array($value,$duplicate)){
        echo "Unique Elemnets are these - ".$value."</br>";

    }else{

        $duplicate[]= $value; 
    }
}
?>