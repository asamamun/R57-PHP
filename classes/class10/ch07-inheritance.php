<h3>
Inheritance
</h3>
<?php
class Employee{
    public $name="not set yet";
    private $salary = "0";
    protected $department = "general";
    function __construct() {
        echo "<p>Employee object created!</p>";
       }
}

class Executive extends Employee{

    private $salary = "1";
    function __construct() {
        parent::__construct();
        echo "<p>Executive object created!</p>";
        
       }
    function info(){
        return [$this->name, $this->salary, $this->department];
    }
}

$sathi = new Executive();
echo $sathi->name . "<br>";
// echo $sathi->salary . "<br>";
// echo $sathi->department . "<br>";
print_r($sathi->info())
?>