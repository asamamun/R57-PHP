<?php
/* $fileName = $_FILES['img']['name'];
$filePath = $_FILES['img']['full_path'];
$fileTemp = $_FILES['img']['tmp_name'];
$fileType = $_FILES['img']['type'];
$fileError = $_FILES['img']['error'];
$fileSize= $_FILES['img']['size'];
$array = explode('.', $fileName);
$extension = end($array);
$output = time().rand().".".$extension;
$filePath = "uploads/$output";
$image = imagecreatefromjpeg($fileTemp);
imagejpeg($image, $filePath, 100); */




/* $file = 'uploads/17051264341414077552.jpg';
list($w, $h) = getimagesize($file);
$nw = 48;
$nh = 48;
$newimg = imagecreatetruecolor($nw, $nh);
$source = imagecreatefromjpeg($file);
imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
$array = explode('.', $file);
$extension = end($array);
$output = time().rand().".".$extension;
$filePath = "uploads/$output";
imagejpeg($newimg, $filePath); */



/* $fileName = $_FILES['img']['name'];
$file = $_FILES['img']['tmp_name'];
list($w, $h) = getimagesize($file);
$nw = 300;
$nh = 300;
$newimg = imagecreatetruecolor($nw, $nh);
$source = imagecreatefromjpeg($file);
imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
$array = explode('.', $fileName);
$extension = end($array);
$output = time().rand().".".$extension;
$filePath = "uploads/$output";
imagejpeg($newimg, $filePath, 10); */


header("content-type: image/jpg");
$fileName = $_FILES['img']['name'];
$file = $_FILES['img']['tmp_name'];
$fileType = $_FILES['img']['type'];
list($w, $h) = getimagesize($file);
$nw = $_POST['width'] ? $_POST['width'] : $w;
$nh = $_POST['height'] ? $_POST['width'] : $h;
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
        /* $smtp = imagecreatefromjpeg('smtp/icon.jpg');
        imagecopy($newimg, $smtp, round($nw/2), round($nh/2), 0, 0, 100, 100); */
        #header er karone image ta show korteche;
        imagejpeg($newimg);
        imagejpeg($newimg, $filePath, $quality);
    }elseif($fileType == "image/png"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefrompng($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        /* $smtp = imagecreatefrompng('smtp/icon.png');
        imagecopy($newimg, $smtp, round($w/2), round($h/2), 0, 0, 30, 20); */
        imagepng($newimg);
        imagepng($newimg, $filePath, 9, PNG_NO_FILTER);
    }elseif($fileType == "image/gif"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefromgif($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        /* $smtp = imagecreatefrompng('smtp/icon.png');
        imagecopy($newimg, $smtp, round($w/2), round($h/2), 0, 0, 60, 57); */
        imagejpeg($newimg);
        imagejpeg($newimg, $filePath, $quality);
    }elseif($fileType == "image/webp"){
        $newimg = imagecreatetruecolor($nw, $nh);
        $source = imagecreatefromwebp($file);
        imagecopyresized($newimg,$source,0,0,0,0,$nw,$nh,$w,$h);
        /* $smtp = imagecreatefrompng('smtp/icon.png');
        imagecopy($newimg, $smtp, round($w/2), round($h/2), 0, 0, 60, 57); */
        imagewebp($newimg);
        imagewebp($newimg, $filePath, $quality);
    }else{
        echo "image not convert";
    }
}else{
    header("Location: index.php");
}









