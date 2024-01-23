<?php
session_start();
require "conn.php";

if(isset($_POST['username'])){
    $idtoupdate = $_POST['id'];
    $username = $conn->escape_string($_POST['username']);
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $pass = password_hash($pass1,PASSWORD_DEFAULT);
        $update_query = "update users set username='{$username}',password='{$pass}' where id={$idtoupdate} limit 1";
        $conn->query($update_query);
        if($conn->affected_rows){
            $message = "User Updated successfully";
        }
        else{
            $message = "Something went wrong";
        }
    }


}

if(isset($_GET['id'])){
    
    // $id = $conn->escape_string($_GET['id']);
    $id = filter_var($_GET['id'],FILTER_VALIDATE_INT);
    if($id){
        $selectQuery = "select id,username,create_at from users where id=$id limit 1";
        $result = $conn->query($selectQuery);
        $row = $result->fetch_assoc();

    }
    
}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        if(isset($message)) echo $message;
        ?>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="username" value="<?= $row['username'] ?>" required>
            <input type="password" name="pass1" id="">
            <input type="password" name="pass2" id="">
            <input type="submit" value="Update">
        </form>
    </body>
    </html>