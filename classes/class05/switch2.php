<?php

$score = $_GET['score']??null;

switch (true) {
    case ($score >= 90 && $score <= 100):
        echo "Excellent!";
        break;
    case ($score >= 80 && $score < 90):
        echo "Very Good!";
        break;
    case ($score >= 70 && $score < 80):
        echo "Good";
        break;
    case ($score >= 60 && $score < 70):
        echo "Average";
        break;
    default:
        echo "Below Average";
}

?>
