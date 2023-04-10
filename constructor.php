<?php
class Myclass{

 function __construct()
 {
   echo 'My Constructor Start <br>';
 }
 function myfunc()
 {
   echo 'My Personal Function <br>';
 }
 function __destruct()
 {
   echo 'My Destruct Function <br>';   
 }

}

$obj = new Myclass();
$obj->myfunc();

?>