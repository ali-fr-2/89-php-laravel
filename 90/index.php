<?php

class fruits{
    public $name;//we can use public any where we want 
    protected $color;//we cant use protected anywhere except in this class and with the extends classes (inheritance)
    private $weight;//we cant use private anywhere excepts in this class 
}

// class parents{
//     public $txt="my eye is blue public";
// }

// class child extends parents{
//     public function eyecolor(){
//         return $this->txt;
//     } 
// }

// $ali=new child();

// echo $ali->eyecolor();
//------------------------------------we use public and its true
// class parents{
//     protected $txt="my eye is blue protected";
// }

// class child extends parents{
//     public function eyecolor(){
//         return $this->txt;
//     } 
// }

// $ali=new child();

// echo $ali->eyecolor();
//------------------------------------we use protected and its true
// class parents{
//     protected $txt="my eye is blue protected";
// }

// class child extends parents{
//     private function eyecolor(){
//         return $this->txt;
//     } 
// }

// $ali=new child();

// echo $ali->eyecolor();
//------------------------------we use private and its not true


// class fruits{
//     // public $name;//we can use public any where we want 
//     // protected $color;//we cant use protected anywhere except in this class and with the extends classes (inheritance)
//     private $weight="300gr";//we cant use private anywhere excepts in this class 

//     function getName(){
//         return $this->weight;
//     }

// }

// $apple=new fruits();

// echo $apple->getName();