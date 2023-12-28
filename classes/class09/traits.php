<?php
trait larelappa
{
    function _o($message){
        echo "<pre>";
        echo $message;
        echo "</pre>";
    }
    function header(){
        echo "<h3>Header</h3>";
    } 
    function footer(){
        echo "<h3>Footer</h3>";
    } 
}
/* class A{
    function o($message){
        echo "<pre>";
        echo $message;
        echo "</pre>";
    }
}
class B{
    function o($message){
        echo "<pre>";
        echo $message;
        echo "</pre>";
    }
} */
class A{
    use larelappa;
}
class B{
    use larelappa;
}

$a = new A();
$a->header();
$a->_o($_SERVER['HTTP_USER_AGENT']);
$a->footer();

$b = new B;
$b->footer();