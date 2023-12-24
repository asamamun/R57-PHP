<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>functions can be: builtin and user defined</h1>
    <h3>Function has two parts: function definition and function call</h3>
    <h3>Only in function definition you have to use code block {}</h3>
    <h3>in function call you dont need to use code block{}</h3>
    <h3>function can take parameters and can return values</h3>
    <?php
    //built in function
        echo pow(2.2,2);
        echo "<br>";
        //user defined function
        function sq($n){
            return $n*$n;
        }
        //fx call
        echo pow(2,sq(3));
    ?>
    <hr>
    <h3>LIST function</h3>
    <?php
    //array destructuring using list function
    $colors = ["red","blue","green","yellow","yellow1"];
    list($color1, $color2, $color3,$colorrest) = $colors;
    echo $color3;
    ?>
    <hr>
    <?php
    $numbers = range(12,20);//[12,13,14,15,16,17,18,19,20]
    list($a,$b,$c) = $numbers;
    echo $c;
    ?>
    <hr>
    <?php
    function retrieveUserProfile()
    {
    $user[] = "Jason Gilmore";
    $user[] = "jason@example.com";
    $user[] = "English";
    return $user;
    }
    list($name,$e,$l) = retrieveUserProfile();
    echo $name;
    ?>
    <hr>

</body>
</html>