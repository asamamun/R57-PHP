<?php
header("content-type: image/jpg");
$fileName = $_FILES['img']['name'];
$file = $_FILES['img']['tmp_name'];
$fileType = $_FILES['img']['type'];
list($w, $h) = getimagesize($file);
$nw = $_POST['width'] ? $_POST['width'] : $w;
$nh = $_POST['height'] ? $_POST['height'] : $h;
$array = explode('.', $fileName);
$extension = end($array);
$output = time().rand().".".$extension;
$filePath = "uploads/$output";
if($_POST['quality'] == "good"){
    $quality = 30;
}elseif($_POST['quality'] == "batter"){
    $quality = 60;
}elseif($_POST['quality'] == "best"){
    $quality = 100;
}else{
    $quality = 100;
}
$imgArray = array("image/jpg", "image/jpeg", "image/png", "image/gif", "image/webp");
if(in_array($fileType, $imgArray)){
    if($fileType == "image/jpg" || $fileType == "image/jpeg"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefromjpeg($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        #header er karone image ta show korteche;
        imagejpeg($newimg);
        imagejpeg($newimg, $filePath, $quality);
    }elseif($fileType == "image/png"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefrompng($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        imagepng($newimg, $filePath, 9, PNG_NO_FILTER);
    }elseif($fileType == "image/png"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefromgif($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        imagejpeg($newimg, $filePath, $quality);
    }elseif($fileType == "image/webp"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefromwebp($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        imagewebp($newimg, $filePath, $quality);
    }else{
        echo "image not convert";
    }
}else{
    header("Location: index.php");
}
?>








