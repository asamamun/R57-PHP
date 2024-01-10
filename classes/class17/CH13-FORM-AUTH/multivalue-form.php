<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['s'])) {
        $l = $_POST['languages'];
        $l2 = $_POST['languages2'];
        var_dump($l);
        echo "<br>";
        var_dump($l2);
        // exit;
        echo "<br>";
        foreach ($l as $key => $value) {
            echo $value . "<br>";
        }
        echo "<hr>";
        foreach ($l2 as $key => $value) {
            echo $value . "<br>";
        }
    }
    ?>
    <form action="" method="post">
        <select name="languages[]" size="4" multiple>
            <option value="csharp1">C#</option>
            <option value="javascript1">JavaScript</option>
            <option value="perl">Perl</option>
            <option value="php" selected>PHP</option>
            <option value="dart">dart</option>
            <option value="go">go</option>
        </select>
        <hr>
        What's your favorite programming language?<br> (check all that
        apply):<br>
        <input type="checkbox" name="languages2[]" value="csharp2">C#<br>
        <input type="checkbox" name="languages2[]" value="javascript2">JavaScript
        <br>
        <input type="checkbox" name="languages2[]" value="perl2">Perl<br>
        <input type="checkbox" name="languages2[]" value="php2">PHP<br>
        <input type="submit" name="s" value="check the values">
    </form>
</body>

</html>