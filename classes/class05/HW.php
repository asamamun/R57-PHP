<h1>get all values from this link and show players and team infos https://fantasy.premierleague.com/api/bootstrap-static/</h1>
<h3>this data is given for foreach practice. Show players data in bootstrap table</h3>
<h4>https://resources.premierleague.com/premierleague/photos/players/250x250/p223094.png</h4>
<ul>
    <li>events</li>
    <li>teams</li>
    <li>elements</li>
</ul>
<?php
//https://fantasy.premierleague.com/api/bootstrap-static/
$contents = file_get_contents("fpl.json");
$fpldata = json_decode($contents);
echo "<pre>";
var_dump($fpldata->elements);
echo "</pre>";