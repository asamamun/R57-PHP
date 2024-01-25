<?php
if(isset($_GET['id'])){
    require "database.php";
    
    $deleteQuery = "delete from products where id='".$_GET['id']."'";
    // echo $deleteQuery;
    $conn->query($deleteQuery);
    if($conn->affected_rows == 1){
        header("location:select.php");
    }
    else{
        echo "Problem Deleting Record!!";
    }
}
$conn->close();
