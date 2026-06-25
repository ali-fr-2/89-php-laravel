<?php

class parents{
    public $txt="my eye is blue";
}

class child extends parents{
    public function eyecolor(){
        return $this->txt;
    } 
}

$ali=new child();

echo $ali->eyecolor();