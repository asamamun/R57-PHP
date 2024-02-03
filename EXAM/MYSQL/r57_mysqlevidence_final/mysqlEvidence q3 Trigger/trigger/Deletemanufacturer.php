<?php
$deleteId=$_GET['deleteid']??null;
if($deleteId){
$db=new mysqli("localhost", "root", NULL, "company");
$myShowQuery="delete from manufacturer where id='$deleteId';";
$db->query($myShowQuery);
$db->close();
$message =  "manufacturer with id: $deleteId deleted";}
?>
<html>
<head>
<title>Manufacturer</title></head>
<body>
<h2>Manufacturer Table</h2>
<h3><?= $message??""; ?></h3>
	<form action="#" method="get">
		<table>
               <tr><td>Manufacturer</td><td>:</td>
               <td>
               <?php
               $db=new mysqli("localhost", "root", NULL, "company");
               $myShowQuerry="select * from manufacturer where 1;";               
               $result = $db->query($myShowQuerry);
               echo "<select name='deleteid'>";
               while ($row=$result->fetch_assoc()){               
               	echo "<option value=" .$row['id'].">".$row['name']."</option>";}               
               echo "</select>";               
               $result->free();
               $db->close();                             
               ?>
               </td></tr>			   
			   <tr><td></td><td></td>
               <td>
               <input type="submit" name="delete"  id="btnDelete" value="delete" />
               </td></tr></table></form></body></html>
 

  