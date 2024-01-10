<?php
if( isset($_GET['s']) ){
    $searchvalue = $_GET['s'];
    $url = "http://google.com/search?q=" . $searchvalue;
    echo $url;
    sleep(4);
    // exit;
    header("Location: $url");
}
