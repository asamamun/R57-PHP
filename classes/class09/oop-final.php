<h3>Marking a method as final prevents it from being overridden by a subclass.</h3>
<?php
class A{
    final public function lastname(){
        return "chattopaddhay";
    }
     public function firstname(){
        return "";
    }
}
class B extends A{
    //Cannot override final method A::lastname()
/*     public function lastname(){
        return "gongopaddhay";
    } */   
}

class C extends A{

}
$b = new B;
echo $b->lastname();

$c = new C;
echo $c->lastname();