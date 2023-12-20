
<form action="">
    <input type="text" name="news" placeholder="89181" value="89181">
    <input type="text" name="name">
    <input type="submit" value="Search">
</form>
<?php
$url = "https://mzamin.com/news.php?news=".$_GET['news'];
// echo $_GET["news"];
echo file_get_contents($url);
//get-post.php?news=12
//?news=A&name=B
?>