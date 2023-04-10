<?php
class base{
    protected $name;
    
    public function print_name(){
        echo 'My Name is Hello';
    }
}
class derived extends base{
  
    public function print_sirname($name){
        echo 'My Sirname is '.$this->name=$name;
    }
}
$obj = new derived;
$obj->print_sirname('World');
?>
