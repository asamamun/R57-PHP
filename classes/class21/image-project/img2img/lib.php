<?php
//header("content-type: image/jpg");
// $path = $_POST['folder'] ? '/xampp/htdocs/'.$_POST['folder'].'/' : '/xampp/htdocs/';
$path = $_POST['folder'] ? $_POST['folder'].'/' : null;
if(is_dir($path)){
    $array = array('jpg', 'jpeg');
    $folder = array_diff(scandir($path), array('.', '..'));
    foreach($folder as $key => $value){
        if(is_file($path.$value)){
            $fileName = explode('.', $value);
            $ext = end($fileName);
            if(in_array($ext, $array)){
                $file = $path.$value;
                $image = imagecreatefromjpeg($file);
                $quality = isset($POST['quality']) ? $POST['quality'] : 50;
                //imagejpeg($image);
                imagejpeg($image, $file, $quality);
            }
        }
    }
    header("Location: index.php");
}else{
    echo "folder not valid.";
}











