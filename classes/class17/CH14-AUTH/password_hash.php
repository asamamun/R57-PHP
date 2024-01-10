?pass=123 <br>
<?php
$pass = $_GET['pass']??"no value available";
echo password_hash($pass, PASSWORD_DEFAULT);
//for 99999
//$2y$10$82MfLRE/A4O635laGZxflOZYC/7Z5RyRNxi1J6OaxocE5Iev.514e
//$2y$10$o74hskpOGSR2ARFhgLUJ.O2b9mz75JSH/pQTex2fet5sxuhcVMkqi
//$2y$10$e6sDuVlicBbMM5H5zB.REemu2H3.jTluSm2URCE8Yi3Ifp8ANXTKW