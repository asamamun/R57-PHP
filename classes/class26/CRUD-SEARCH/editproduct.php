<?php
require "database.php";

//update user
if(isset($_GET['id'])){
    $idtoUpdate = $_GET['id'];
  
    $q= "select * from products where id=$idtoUpdate";
    $r = $conn->query($q);
    $row = $r->fetch_assoc();
    $id = $row['id'];
    $price= $row['price'];
    $sku = $row['sku'];
    $name=$row['name'];


}
if(isset($_POST['update'])){
    $uid = $conn->real_escape_string($_POST['id']);
    $uname = $conn->real_escape_string( $_POST['uname']);
    $usku = $conn->real_escape_string( $_POST['usku']);
    $uprice = $_POST['uprice'];

    $updateQuery = "update products set name='$uname',sku='$usku', price='$uprice' where id='$uid'";
    //echo $updateQuery;
    //exit;
    $c=$conn->query($updateQuery);
    var_dump($c);
    if($conn->affected_rows == 1){
        header("location: select.php");
    }
    echo "Update Failed!!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(!$row){ echo "Record not Found"; exit;}
    ?>
 <h3>Edit products</h3>
    <hr>
    <form action="editproduct.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>
            Name:<br />
            <input type="text" name="uname" size="20" value="<?php echo $row['name']; ?>" required />
        </p>
        <p>
            price :<br />
            <input type="text" name="uprice" size="20" value="<?php echo $row['price']; ?>" required />
        </p>  
        <p>
            sku :<br />
            <input type="text" name="usku" size="20" value="<?php echo $row['sku']; ?>" required />
        </p>       
        <p>
            <input type="submit" name="update" value="Update" />
        </p>
    </form>
</body>
</html>
<?php
$conn->close();
?>