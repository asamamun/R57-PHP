<?php
$pid = $_GET['product'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 id="ptitle"></h3>
    <img src="" id="pthumb" alt="">
    <script>
        function show(data){
document.getElementById("ptitle").innerHTML = data.title;
document.getElementById("pthumb").src = data.thumbnail;
        }
        let url = "https://dummyjson.com/products/<?=$pid ?>";
        fetch(url)
.then(res => res.json())
.then(d=>{
    console.log(d);
    show(d)
});
    </script>
</body>
</html>