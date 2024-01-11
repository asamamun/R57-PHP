<?php
$allowed_files = ["image/jpeg", "image/png", "image/gif", "image/webp"];
if(isset($_POST['upload'])){
$file = $_FILES['myfile'];
echo "<pre>";
var_dump($file);
echo "</pre>";
if(in_array($file['type'], $allowed_files)){
move_uploaded_file($file['tmp_name'],"myfiles/".time()."_".$file['name']);
}
else{
    echo "only image files are allowed";
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
    <h1>File upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" id="" required>
        <input type="submit" value="Upload" name="upload">
    </form>

</body>
</html>