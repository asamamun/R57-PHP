<?php
session_start();
require "conn.php";
 // Create the query
 $query = 'SELECT id, username, create_at FROM users ORDER by username';
 // Send the query to MySQL
 $result = $conn->query($query);
 $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-between">
    <h3>User Data</h3>
    <a href="user_create.php" class="btn btn-primary"><i class="bi bi-person-plus"></i></a>
    </div>
    <hr>
<?php
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> <?= $message; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    unset($_SESSION['message']);
}
?>
    <table class="table table-info table-bordered table-hover">
    
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Registration Time</th>
            <th>Action</th>
        </tr>
        
        
<?php
 while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['username']}</td>
    <td>{$row['create_at']}</td>
    <td><a href='user_edit.php?id={$row['id']}'><i class='bi bi-pencil-square'></i></a> <a href='user_delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'><i class='bi bi-trash3'></i></a> </td>
</tr>";
     }
?>
    </table>
    </div>
</body>
</html>