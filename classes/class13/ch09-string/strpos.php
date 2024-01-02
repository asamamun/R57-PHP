<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        The strpos() function finds the position of the first case-sensitive occurrence of a
        substring in a string.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>
    <?php
    $substr = "index.html";
    $log = <<< logfile
 192.168.1.11:/www/htdocs/index.html:[2010/02/10:20:36:50]
 192.168.1.13:/www/htdocs/about.html:[2010/02/11:04:15:23]
 192.168.1.15:/www/htdocs/index.html:[2010/02/15:17:25]
logfile;
echo strpos($log,"index.html",27);
// echo strpos($log,"index.html",27);
/*     // What is first occurrence of the time $substr in log?
    $pos = strpos($log, $substr);
    // Find the numerical position of the end of the line
    $pos2 = strpos($log, "\n", $pos);
    // Calculate the beginning of the timestamp
    $pos = $pos + strlen($substr) + 1;
    // Retrieve the timestamp
    $timestamp = substr($log, $pos, $pos2 - $pos);
    echo "The file $substr was first accessed on: $timestamp"; */
    ?>
    <hr>
    <?php
$text = <<<PSG
Brazilian central defender Lucas Beraldo, known as 'The Joker' for his habit of laughing shortly before matches, signed for French champions Paris Saint Germain on Monday.

The 20-year-old signed a five year contract with PSG, ending a three-year stay at Sao Paulo with whom he won the 2023 Copa do Brasil.

Beraldo, who says laughing prior to kick-off is part of his mental preparation, said joining PSG is a huge step for his career.

"I am very happy to sign for a club as ambitious as Paris Saint-Germain," said Beraldo.

"This is an important stage of my career, which will permit me to progress.

"I am eager to get to know my teammates and to take my first steps with the PSG shirt on my back."

Beraldo is according to a source close to the club emblematic of the type of player PSG are seeking now as they change tack from their previous strategy of signing superstars such as Lionel Messi and Neymar.

The source said they are targeting young team players, who are not 'bling bling', and will sign long term contracts with lower salaries which can be re-evaluated later.
PSG;
$pos = strpos($text,"Beraldo");
while($pos){
echo "Beraldo found at ". $pos . "<br>";
$pos = strpos($text,"Beraldo",++$pos);
}


    ?>
    <hr>
    <?php
    echo strrpos($text,"Beraldo");
    ?>
    
</body>

</html>