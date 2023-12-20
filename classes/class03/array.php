<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #colorDiv{
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
        }
        #colorDiv div{
           width: 150px;
           height: 150px;
        }
    </style>
</head>
<body>
    <?php
    $date = 20;
    class Color{
        public $makeupboxArray = ["red", "lightgreen","#607d3d","green","lime","#74d72e", "blue", "pink", "yellow","purple", "fuchsia", "#99edc3", "teal", "bisque", "aqua", "olive", "orange", "maroon","black","#ff00ff"];
    }
    
    // echo $makeupboxArray;
    echo "<pre>";
    //var_dump($makeupboxArray);
    // print_r($makeupboxArray);
    echo "</pre>";
    ?>
    <hr>
    <div id="colorDiv">
    <?php
    $o = new Color();
    foreach ($o->makeupboxArray as $key => $value) {
        echo "<div style='background-color:{$value}'>".$value . " </div>";
    }
    ?>
    </div>
</body>
</html>