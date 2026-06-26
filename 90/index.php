<?php

// class fruits{
//     const FRUITNAME="APPLE";
// }

// echo fruits::FRUITNAME;

abstract class car{
    public $name;
    public function __construct($carName)
    {
        $this->name=$carName;
    }

    abstract public function intro():string;
}

class bmw extends car{
    #[Override]
    public function intro(): string
    {
        return "deutschland {$this->name}";
    }
}

$audi=new bmw("audi");
echo $audi->intro();