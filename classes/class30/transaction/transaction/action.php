<?php
require 'db.php';
try {
    $db->autocommit(false);
    if(isset($_POST["submit"])){
        $loadPage = false;
        $subject = $_POST["subject"];
        $chapter = $_POST["chapter"];
        $question = $_POST["question"];
        $ansArray = $_POST["ans"];
        $ansRight = $_POST["ansRight"];
        $db->query("INSERT INTO `questions`(`subject`, `chapter`, `question`) VALUES ('$subject','$chapter','$question')");
        $queId = $db->insert_id;
        for ($i=0; $i < count($ansArray); $i++) { 
            $ans = $ansArray[$i];
            if($ansArray[$i] == $ansRight){
                $db->query("INSERT INTO `answers`(`question`, `answer`, `status`) VALUES ('$queId','$ans','1')");
                $loadPage = true;
            }else{
                $db->query("INSERT INTO `answers`(`question`, `answer`, `status`) VALUES ('$queId','$ans','0')");
            }
        }
    }
    $db->commit();
    if($loadPage){
        header("Location: insert.php?msg=success");
    }else{
        header("Location: insert.php?msg=some thing error please chack it again and submit.");
    }
} catch (\Throwable $e) {
    $db->rollback();
}
$db->close();
?>