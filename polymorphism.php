<?php  
   interface Area {  
      public function calcArea();  
   }  
   class Circle implements Area {  
      private $radius;  
      public function __construct($radius){  
         $this->radius = $radius;  
      }  
      public function calcArea(){  
         return $this -> radius * $this -> radius * pi();  
      }  
   }  
   class Rectangle implements Area {  
      private $width;  
      private $height;  
      public function __construct($width, $height){  
         $this -> width = $width;  
         $this -> height = $height;  
      }  
      public function calcArea(){  
         return $this -> width * $this -> height;  
      }  
   } 
   $mycircle = new Circle(3);
   $myrecatangle = new Rectangle(3,4);
   echo 'Area of Circle : - ';
   echo $mycircle->calcArea();
   echo "<br>";
   echo 'Area of Recatngel : - ';
   echo $myrecatangle->calcArea();
   
?>   