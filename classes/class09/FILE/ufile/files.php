<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mainDiv{
            margin:0px auto;
            width: 80%;
        }
        table, th, td{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }
        th{
            width: 45%;
            padding:5px;
            vertical-align: middle;
        }
        td{
            width: 45%;
            padding:5px;
            vertical-align: middle;
        }
        td>a{
            text-decoration: none;
            font-size: 20px;
        }
        .size{
            width: 5%;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="mainDiv">
    <table>
        <caption><h1>History</h1></caption>
        <tr>
            <th>Name</th>
            <th class="size">Extension</th>
            <th class="size">Size</th>
        </tr>
<?php
    function sizeFunc($value){
        $size = null;
        $fileSize = filesize($value);
        if ($fileSize >= 1073741824){
            $size = ceil(number_format($fileSize / 1073741824, 2)) . ' GB';
        }elseif ($fileSize >= 1048576){
            $size = ceil(number_format($fileSize / 1048576, 2)) . ' MB';
        }elseif ($fileSize >= 1024){
            $size = ceil(number_format($fileSize / 1024, 2)) . ' KB';
        }elseif ($fileSize > 1){
            $size = ceil($fileSize) . ' B';
        }elseif ($fileSize == 1){
            $size = ceil($fileSize) . ' B';
        }else{
            $size = '0 size';
        }
        return $size;
    }
   $allFile = glob("uploads/*.*");
   $fileArray = array();
   sort($fileArray);
   $i = 1;
   foreach ($allFile as $key => $value) {
    $fileArray[$i++] = $value;
   }
   foreach ($fileArray as $key => $value) {
    $fileName = basename($value);
    $fileNameArray = explode(".", $fileName);
    $fileExtension = $fileNameArray[count($fileNameArray)-1];
    $fileExtension = strtolower($fileExtension);
    
    $fileSize = sizeFunc($value);
    
    echo <<<html
        <tr>
            <td><a href="$value"><img src="icon/$fileExtension.png" width="18px" height="18px"/> $fileNameArray[0]</a></td>
            <td class="size">$fileExtension</td>
            <td class="size">$fileSize</td>
        </tr>
html;
   }
?>
        
    </table>
</div>
</body>
</html>