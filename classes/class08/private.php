<?php
class Employee
{
    public $confusedgirl;
    private $name;
    // Getter
    public function getName()
    {
        return "I am " . $this->name;
    }
    // Setter
    public function setName($name)
    {
        $this->name = $name;
    }
}
$e = new Employee;
$e->confusedgirl = "Maria";
echo $e->confusedgirl . "<br>";
$e->setName("Nasrine");
echo  $e->getName();
