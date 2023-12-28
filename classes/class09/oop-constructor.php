<h3> 
constructor is defined as a block of code that automatically executes at the time of object 
instantiation
</h3>
<pre>
• Constructors can accept parameters, which can be assigned to 
specific object properties at creation time.
• Constructors can call class methods or other functions.
• Class constructors can call on other constructors, including those 
from the class parent.
</pre>
<hr>
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
