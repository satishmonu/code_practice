<?php 
// PHP program to demonstrate working
// of interface.
interface Myworkspace{
    
    public function f1();
    public function f2();

}
class Otherworkspace implements Myworkspace{

    public function f1(){
        echo 'I am function 1';
    }
    public function f2(){
        echo 'I am function 2';
    }
}

// Create a object and call the functions
$obj = new Otherworkspace();
$obj->f1();
echo "<br>";
$obj->f2();
  
?> 