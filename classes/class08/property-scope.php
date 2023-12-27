<h3>Properties and methods can have access modifiers which control where they can be accessed.</h3>
<p>There are three access modifiers/property scope:</p>
<ul>
    <li>public:the property or method can be accessed from everywhere. This is default</li>
    <li>private: the property or method can be accessed within the class and by classes derived from that class</li>
    <li>protected:  the property or method can ONLY be accessed within the class</li>
</ul>
<?php
class A{
    //property
    public $x=5;
    private $y=2;
    protected $z=3;
    //method
    //set
    public function peon($n){
        $this->y = $n;
    }
    //get
    public function peon_show(){
        return $this->y;
    }
}
$o = new A();
$o->x = 8;
echo $o->x;
echo "<br>";
// echo $o->y = 55;//Cannot access private property
$o->peon(9);
echo $o->peon_show();

?>