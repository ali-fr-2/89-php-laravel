<?php

interface animal{
    public function makesound();
}

class cat implements animal{
    #[Override]
    public function makesound()
    {
        echo "meow";
    }
}

$animal=new cat();

$animal->makesound();


?>