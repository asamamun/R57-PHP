<h3>Class methods marked as private are available only to the originating class and not to the child classes and not from object</h3>
<h3>Class methods marked as protected are available only to the originating class and its child classes. But not from object</h3>
<?php
class Student{
    
    public function C(){ 
        echo "<br>C called"; 
        $this->A();
    }
    private function A(){ echo "<br>A called";}
    protected function B(){echo "<br>B called";}
    public function runA(){
        $this->A();
    }
    
}

class IdbStudent extends Student{
/*     $this->C();
    $this->A();
    $this->B(); */
    public function test(){
        $this->c();
        // $this->A();//error
        $this->b();
    }
}
$maria = new IdbStudent;
$maria->test();
$maria->runA();