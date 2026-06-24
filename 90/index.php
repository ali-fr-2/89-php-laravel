<?php

// class fruit
// {

//     public $name;
//     public $color;

//     function set_name($fruitName, $fruitColor)
//     {
//         $this->name = $fruitName;
//         $this->color = $fruitColor;
//     }

//     function get_name()
//     {
//         return $this->name;
//     }
//     function get_color()
//     {
//         return $this->color;
//     }

//     function get_info()
//     {
//         return $this->name . " - " . $this->color;
//     }
// }

// $apple = new fruit();

// $apple->set_name("apple", "red");

// var_dump($apple);

// echo "<br>";

// $banana = new fruit();

// $banana->set_name("banana", "yellow");

// echo $banana->get_color();

// echo "<br>";

// echo $banana->get_name();

// echo "<br>";

// echo $banana->get_info();


class fruit
{

    public $name;
    public $color;

    function __construct($friutName, $friutColor)
    {
        $this->name = $friutName;
        $this->color = $friutColor;
    }
    function __destruct()
    {
        echo "the fruit is {$this->name} and the color is {$this->color}";
    }
}

$apple = new fruit("apple", "red");
 
// var_dump($apple);// this use for construct no usefull for destruct