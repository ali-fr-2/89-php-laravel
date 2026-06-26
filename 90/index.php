<?php

trait msg1{
    public function message1(){
        echo "hello world";
    }
}
trait msg2{
    public function message2(){
        echo "my name is ali";
    }
}
class msg3{
    use msg1,msg2;
}

// $msg=new msg3();
// $msg->message2();


trait hello{
    public function sayhello(){
        echo "hello";
    }
    public function sayhi(){
        echo "hi";
    }
}
trait bye{
    public function saygoodbye(){
        echo "goodbye";
    }
    public function saybye(){
        echo "bye";
    }
}

class base{
    use hello,bye,msg1,msg2;
}

$test=new base();


// $test->saygoodbye();
// $test->saybye();
// $test->sayhello();
// $test->sayhi();

$test->message1();
$test->message2();



?>