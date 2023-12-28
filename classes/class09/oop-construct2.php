<?php
class A{
    public function __construct()
    {
        echo "<br>i am created from A when object is created";
    }
    public function __destruct(){
        echo "<br><strong>i can work here when object is destroyed</strong>";
    }
}
class B extends A{
    public function __construct()
    {
        // parent::__construct();
        echo "<br>i am created from B when object is created";
        parent::__construct();
    }
}

$objectA = new A();
$objectB = new B();
//garbage collection

function a( int $i ):string{ return $i . " is something"; }

