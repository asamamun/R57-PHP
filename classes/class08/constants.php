<?php
define("TAX",0.05);
class Cart{
    //no $ in constant
    const TAX = 0.05;
    static function maria(){
        return "De Maria de Maria deMaria de Maria de"; 
    }
}
//you can call constant without creating object
//you can also call static methods without creating object
echo CART::TAX;
echo "<br>";
echo Cart::MARIA();