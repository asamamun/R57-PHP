
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>if.php?marks=77</h1>
<form action="if.php">
    <input type="text" name="marks" required placeholder="marks in number">
    <input type="submit" value="Show Grade">
</form>
<?php
$marks = $_GET['marks']??null;
if($marks){
if($marks>=90){ echo "A+";}
elseif($marks>=80){ echo "A";}
elseif($marks>=70){ echo "B";}
elseif($marks>=60){ echo "C";}
elseif($marks>45){ echo "D";}
elseif($marks>33){ echo "E";}
else echo "F";
}
?>
</body>
</html>