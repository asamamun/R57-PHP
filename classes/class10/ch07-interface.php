<h3>An interface defines a general specification for implementing a particular service, declaring the required functions and constants without specifying exactly how it must be implemented.</h3>
<h3>difference between abstract class and interface is, you can extend only one abstract class but you can implement multiple interface</h3>
<p>abstract class is used with <strong>extends</strong> and interface is used with <strong>implements</strong></p>
<?php
abstract class A{
    abstract function aa();
}
abstract class B{
    abstract function bb();
}
interface iStudent{
    function code();
    function read();
    function sleep();
}
interface iActivities{
    function cook();
    function decorate();
}
class Student extends A implements iStudent,iActivities{
    function code(){}
    function read(){}
    function sleep(){}
    function aa(){}
    function cook(){}
    function decorate(){}
}
?>