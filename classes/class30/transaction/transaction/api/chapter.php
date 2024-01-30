<?php
require '../db.php';
$s = $_GET['s'] ?? 4;
$chapter = $db->query("SELECT `name`,`id` FROM `chapters` WHERE subject=$s");
while ($result = $chapter->fetch_assoc()) {
    $id = $result['id'];
    $name = $result['name'];
    echo "<option value='$id'>$name</option>";
}
?>