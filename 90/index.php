<?php 

class Animal{

    public $name="";
    public $color="";

    public $age="";

    function sleep(){
        echo "sleep";
    }


}

$cat=new Animal();

$dog=new Animal();

$cat->name="ali";
$cat->color="black";
$dog->name="arash";
$dog->color="white";


var_dump($cat);
echo "<br>";
var_dump($dog);

// $cat->sleep();


?>