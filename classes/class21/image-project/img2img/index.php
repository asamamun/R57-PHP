<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item{
            margin-bottom: 5px;
        }
        input, select{
            padding: 5px;
        }
        label{
            display:inline-block;
            width:100px;
        }
    </style>
</head>
<body>
    <form action="lib.php" method="post" enctype="multipart/form-data">
        <div class="item">
            <label for="folder">Enter Your Folder</label>
            <span>Ex: C:/images</span>
            <input name="folder" type="text" id="folder" value="img2img/uploads">
        </div>
        <div class="item">
            <label for="quality">Quality</label>
            <input name="quality" type="number" id="quality" value="50" min="30" max="100">
        </div>
        <input name="submit" type="submit" value="upload" />
    </form>
</body>
</html>