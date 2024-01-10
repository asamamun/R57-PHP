<?php
$hash = '$2y$10$o74hskpOGSR2ARFhgLUJ.O2b9mz75JSH/pQTex2fet5sxuhcVMkqi';
if(password_verify("99999",$hash)){
    echo "matched";
}
else{
    echo "mismatched";
}
