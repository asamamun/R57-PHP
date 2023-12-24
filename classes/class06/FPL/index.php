<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <style>
        body {
    padding-top:50px;
}
table{ width: 100%;}
        th {
  position: sticky;
  top: 50px;  /* 0px if you don't have a navbar, but something is required */
  background-color: teal;
}
    </style>
</head>
<body>
<table class="table">
<thead>
      <tr>
        <th scope="col">Player</th>
        <th scope="col">Photo</th>
        <th scope="col">Cost</th>
        <th scope="col">Sel.</th>
        <th scope="col">Form</th>
        <th scope="col">Pts.</th>
      </tr>
    </thead>
    <tbody>
<?php
$contents = file_get_contents("https://fantasy.premierleague.com/api/bootstrap-static/");
$fpldata = json_decode($contents);
echo "<pre>";
//var_dump($fpldata);
//var_dump($fpldata->elements);
//var_dump($fpldata->teams);
//var_dump($fpldata->elements);
echo "</pre>"; 
$teams = array();
foreach ($fpldata->teams as $fkey => $fvalue) {
    $teams[$fvalue->id] = $fvalue->name;
}
/* var_dump($teams);
exit; */
foreach ($fpldata->elements as $ekey => $evalue) {
    $teamName = $teams[$evalue->team];
/*     foreach ($fpldata->teams as $fkey => $fvalue) {
        if($fvalue->code == $evalue->team_code ){
            $teamName = $fvalue->name;
        }
    } */
    $playerNameArray = explode('.',$evalue->photo);
    $playerName = $playerNameArray[0];
    $finalPlayerName = "p".$playerNameArray[0].".png";
echo <<<html
    <tr>
    <td scope="row">{$evalue->first_name}</td>
    <td><img src="https://resources.premierleague.com/premierleague/photos/players/250x250/{$finalPlayerName}" width="50"/></td>
    <td>{$evalue->now_cost}</td>
    <td>{$evalue->cost_change_start}</td>
    <td>{$evalue->form}</td>
    <td>{$teamName}</td>
    </tr>
html;
}
?>
    </tbody>
</table>
</body>
</html>