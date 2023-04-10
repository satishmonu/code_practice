<?php
// PHP program to demonstrate working
// How traits are working
trait Helloindia{
    public function print_country(){
        echo 'My Country Name is India';
    }
}

class Helloworld{

    use Helloindia;
}

// Create a object and call
$obj = new Helloworld();
$obj->print_country();

?>
