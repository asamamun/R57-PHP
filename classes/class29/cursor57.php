<?php
$quizid = $_GET['quizid']??1;
 // Instantiate the mysqli class
 $db = new mysqli("localhost", "root", "", "r57_php");
 // Execute the stored procedure
 $result = $db->query("CALL calculate_result(".$quizid.")");
?>