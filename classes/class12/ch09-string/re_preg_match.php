<?php
 $line = "vim is the greatest word processor ever created! Oh vIm, how I love thee!";
 if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!<br>";
/*  if (preg_match_all("/\bVim\b/i", $line, $match)) print "Match found!<br>"; */
 var_dump($match);
?>