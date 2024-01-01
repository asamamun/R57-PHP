<?php
class student{
	public $lines;
	function __construct($filename){
		$this->lines = file($filename);
		}
	function result($id){
		foreach($this->lines as $line){
			 list($stid,$result)= explode(',',$line);
			 if($id == $stid){
			 echo "Result of ID: " . $id . " = " . $result;
			 break;
			 }
		}
		}	
	}
$student = new Student("user.txt");	
echo $student->result(104);

?>