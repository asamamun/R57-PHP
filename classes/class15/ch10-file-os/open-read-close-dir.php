<h3>Directory file and folder show</h3>
<ol>
    <li>opendir</li>
    <li>readdir</li>
    <li>readdir</li>
    <li>...</li>
    <li>...</li>
    <li>readdir</li>
    <li>closedir</li>
</ol>
<?php
$url = "E:\jannat-jui-website";
$fh = opendir($url);//file handler
/* echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>";
echo readdir($fh) . "<br>"; */
$total = 0;
while($ff = readdir($fh)){
    if($ff != "." && $ff != ".."){
    if(is_file($url."/".$ff)){
    echo "File : " . $ff . "<br>";
    $total += filesize($url."/".$ff);
    }
    else{
        echo "Folder : " . $ff . "<br>";
    } 
} 
}
/* while($f = readdir($fh)){
    if($f != '.' && $f != '..'){
        if(is_file($url.$f)){
            echo "File : " . $f . "<br>";
        }
        if(is_dir($url.$f)){
            echo "Folder : " . $f . "<br>";
        }
    }
    
} */
closedir($fh);
echo "<hr>";
echo "Total file size : " . $total;