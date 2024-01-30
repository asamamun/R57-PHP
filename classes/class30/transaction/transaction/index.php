<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">Add Queasion</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<?php
$questions = $db->query("SELECT * FROM `questions` WHERE status = 1");
while ($rq = $questions->fetch_assoc()) {
    $qId = $rq['id'];
    echo "<h2>{$rq['question']}</h2>";
    echo "<ol>";
    $answers = $db->query("SELECT * FROM `answers` WHERE question=$qId");
    while ($ra = $answers->fetch_assoc()) {
        if($ra['status'] == 1){
            echo "<li style='color:green'>{$ra['answer']}</li>";
        }else{
            echo "<li>{$ra['answer']}</li>";
        }
    }
    echo "</ol>";
}
?>
            </div>
        </div>
    </div>
</body>
</html>