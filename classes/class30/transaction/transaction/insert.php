<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<a href="index.php">Home</a>
    <div class="container">
        <?= $_GET["msg"] ?? "" ?>
        <form action="action.php" method="post">
            <div class="mb-3 mt-3">
                <label for="subject" class="form-label">Subject:</label>
                <select class="form-control" id="subject" name="subject" onChange="getChapter()">
                    <option>select</option>
                    <?php
                        $subject = $db->query("SELECT `name`,`id` FROM `subjects` WHERE 1");
                        while ($result = $subject->fetch_assoc()) {
                            $id = $result['id'];
                            $name = $result['name'];
                            echo "<option value='$id'>$name</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="chapter" class="form-label">Chapter:</label>
                <select class="form-control" id="chapter" name="chapter">
                    <option>select</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question" class="form-label">Question:</label>
                <textarea class="form-control" rows="5" id="question" name="question"></textarea>
            </div>
            <div class="mb-3">
                <label for="ansOne" class="form-label">Answer no 1:</label>
                <input type="text" class="form-control" id="ansOne" name="ans[]">
            </div>
            <div class="mb-3">
                <label for="ansTwo" class="form-label">Answer no 2:</label>
                <input type="text" class="form-control" id="ansTwo" name="ans[]">
            </div>
            <div class="mb-3">
                <label for="ansThree" class="form-label">Answer no 3:</label>
                <input type="text" class="form-control" id="ansThree" name="ans[]">
            </div>
            <div class="mb-3">
                <label for="ansFour" class="form-label">Answer no 4:</label>
                <input type="text" class="form-control" id="ansFour" name="ans[]">
            </div>
            <div class="mb-3">
                <label for="ansRight" class="form-label">Right Answer:</label>
                <input type="text" class="form-control" id="ansRight" name="ansRight">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="insert">Submit</button>
        </form>
    <div>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/my.js"></script>
</body>
</html>