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
            width: 33%;
            padding:5px;
        }
        td{
            width: 33%;
            padding:5px;
        }
    </style>
</head>
<body>
<div class="mainDiv">
    <table>
        <caption><h1>History</h1></caption>
        <tr>
            <th>IP</th>
            <th>Time</th>
            <th>File</th>
        </tr>
<?php
   $getData = file("data.txt");
   //$jsonData = json_decode($getData);
   foreach ($getData as $key => $value) {
        list($ip, $time, $file) = explode(",",$value);
        echo <<<html
        <tr>
            <td>$ip</td>
            <td>$time</td>
            <td>$file</td>
        </tr>
html;
   }
   //var_dump($getData); 
?>
        
    </table>
</div>
</body>
</html>