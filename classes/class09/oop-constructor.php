<h3> 
constructor is defined as a block of code that automatically executes at the time of object 
instantiation
</h3>

<?php
class Database
{
    public $connection;
    //constructor fires/runs when object is created
    public function __construct()
    {
        $this->connection = new mysqli();
    }
}
$db = new Database();
$db->connection->connect("localhost","root","","r57_php");
echo "<pre>";
var_dump($db->connection);
echo "</pre>";

/* class User extends Database{
    public function select(){
        return $this->connection->query("select 45");
    }
} */
