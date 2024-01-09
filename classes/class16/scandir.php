<?php
$files = scandir("E:/");
?>

    <?php
    foreach ($files as $key => $value) {
        if(is_file("E:/" . $value)) {
        echo "File " . $value . "<br>";
        }
        if(is_dir("E:/" . $value)) {
        echo "Folder " . $value . "<br>";
        }
    }
    ?>
