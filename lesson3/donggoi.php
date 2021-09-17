<?php

class A {
    public $a = 1;
    protected $b = 2;
    private $c = 3;
    function getC(){
        return $this->c;
    }
    function setC($val){
        $this->c = $val;
    }
    
}

class B extends A {
    // function getC(){
    //     return $this->c;
    // }
    function getB(){
        return $this->b;
    }
    function setB($val){
        $this->b = $val;
    }
}

// $x = new A();
// var_dump($x);
// echo '<br>';
// echo $x->getC();
// $x->setC('1009');
// echo '<br>';
// echo $x->getC();

$x = new B();
$x->setB(5);
echo $x->getB();
echo '<br>';


?>