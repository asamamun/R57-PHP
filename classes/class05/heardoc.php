<?php
$pagename = "aboutus";
$header = <<<MYHEADER
<nav>My 'Nav' "links"</nav>
<hr>
<header>
<h3>Welcome to  {$pagename} page</h3>
</header>
MYHEADER;
$year = date("Y");
$footer = <<<MYFOOTER
<hr>
<footer>
<p>All rights reserved @{$year}</p>
</footer>
MYFOOTER;
function card($i=300){
    return <<<CARD
    <div class="card col-3" style="">
      <img src="https://picsum.photos/id/{$i}/300/200" class="card-img-top img-fluid" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    CARD;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?= $header ?>
    <div class="row">
    <?php
    for ($i=101; $i < 120; $i++) { 
        echo card($i);
    }
    ?>
    </div>
    <?= $footer ?>
</body>
</html>

