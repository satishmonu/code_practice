<?php
class base{

 // final method
 final function printdata(){
     echo "base final classs";
 }
 // non-fincal method
 function nonfinal()
 {
      echo "this is not a final clsass";

 }
}
class derivedclass extends base{

    function nonfinal()
    {
        echo "it is a not a final class";
    }
}
$obj = new derivedclass;
$obj->printdata();
echo "</br>";
$obj->nonfinal();

?>