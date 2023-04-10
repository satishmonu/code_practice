<?php

class checkdatatype{
    public static $num = 7;
    public static function check($var)
    {
        if(strlen($var) >= self::$num){
            return true;
        }else{
            return false;
        }
    }
}
$str = "Hello";

if(checkdatatype::check($str)){
    
    echo "String is Valid";

}else{
    echo "String is not Valid";
}

?>