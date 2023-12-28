<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadDir = 'uploads/';
    //$fileName = uniqid() . '_' . $file['name'];
    $fileName = $_FILES['file']['name'];
    $clintIP = $_SERVER['REMOTE_ADDR'];
    $getFile = fopen("data.txt", "a");
    $makeText = "\n".$clintIP.",".date("d/m/Y s:i:h A").",".$fileName;
    fwrite($getFile, $makeText);
    fclose($getFile);
    if (move_uploaded_file($file['tmp_name'], $uploadDir . $fileName)) {
        echo 'File uploaded successfully.';
    } else {
        echo 'Failed to upload file.';
    }
}
