<?php

// class fruits{
//     public $name="mango";
// }
// $mango=new fruits();
// var_dump($mango);


class fruits{
    public static $name="apple";
}


echo fruits::$name;


class showName{
    public static function ali(){
        echo "my name is ali";
    }
}

showName::ali();