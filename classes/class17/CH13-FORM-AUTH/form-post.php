<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div class="container">
    <h1 id="title">Please select a date to calculate your age</h1>
    <form action="" method="post">
        <input type="text" name="uname" required>
        <input type="date" name="dob" required>
        <input type="number" name="num">
        <input id="calc" type="submit" name="calc" value="Calculate Age">
    </form>
    <p id="result">
 <?php
if(isset($_POST['calc'])){
// var_dump($_GET);
echo "<h1>Your Given Information</h1>";
echo "================================<br>";
echo "User Name: " . $_POST['uname'] . "<br>";
echo "Date of Birth: " . $_POST['dob'] . "<br>";
echo "Your given number: " . $_POST['num'] . "<br>";
echo "Thank you for your information";
}
?>
</p>
</div>
 </body>
 </html>