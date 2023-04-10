<?php
class Square{
  
    public $length;
    public $width;

 function __construct($param1, $param2)
 {
   $this->length = $param1;
   $this->width = $param2;

 }
 public function checklengthwidth(){

    echo "Length = $this->length Height= $this->width";

 }

}

// Create Object and call function
$object = new Square(20, 40);
$object->checklengthwidth();

?>