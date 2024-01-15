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
    <form action="convert.php" method="post" enctype="multipart/form-data">
        <div class="item">
            <label for="img">Enter Your File</label>
            <input name="img" type="file" id="img">
        </div>
        <div class="item">
            <label for="width">Width</label>
            <input name="width" type="number" min="1" id="width">
        </div>
        <div class="item">
            <label for="height">Height</label>
            <input name="height" type="number" min="1" id="height">
        </div>
        <div class="item">
            <label for="quality">Quality</label>
            <select name="quality" required="required" id="quality">
                <option>Select</option>
                <option value="good">Good</option>
                <option value="batter">Batter</option>
                <option value="dest">Best</option>
            </select>
        </div>
        <input name="submit" type="submit" value="upload" />
    </form>
</body>
</html>