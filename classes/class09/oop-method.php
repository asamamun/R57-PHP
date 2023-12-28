<h1>A method is quite similar to a function, except that it is intended to define the 
behavior of a particular class.</h1>
<?php
class Image{
    public function setFIle(){}
    public function compress(){
        $this->resize();
    }
    public static function save(){        
        echo "<br>saving image...";}
        //resize method cannot be called directly from object
    private function resize(){echo "<br>resizing image...";}
    public function toPNG(){}
    public function toJPG(){}
    public function toWebp(){}
}
//static method can be called without creating a new instance/object
Image::save();

//normal method can be called only after creating an object
$i = new Image();
$i->setFIle("logo.png");
$i->compress();
$i->save();