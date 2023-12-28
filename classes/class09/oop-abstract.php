<h3>Abstract methods are special in that they are declared only within a parent class but are implemented in child classes. Only classes declared as abstract can contain abstract methods, and abstract classes can't be instantiated.</h3>
<?php
    abstract class DB{
        abstract function select();
        abstract function insert();
        abstract function update();
        abstract function delete();
        abstract function search();
    }

    class User extends DB{
        public function select(){ "SELECT * FROM Users";}
        public function insert(){}
        public function update(){}
        public function delete(){}
        public function search(){}
    }
    class Product extends DB{
        public function select(){ "SELECT * FROM Products";}
        public function insert(){
            $u = new User();
            $u->insert();            
        }
        public function update(){
            $u = new User();
            $u->update();
        }
        public function delete(){}
        public function search(){}
    }


    $u = new User;
    $u->select();
    $u->insert();

    $p = new Product;
    $p->insert();


    //$db = new DB();//Cannot instantiate abstract class
?>
