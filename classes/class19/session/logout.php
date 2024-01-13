<?php
session_start();
session_unset();
session_destroy();
function destroy_auth_data() {
    if(isset($_SERVER['PHP_AUTH_USER']))
        $_SERVER['PHP_AUTH_USER'] = null;       

    if (isset($_SERVER['PHP_AUTH_PW']))
        $_SERVER['PHP_AUTH_PW'] = null;
}
destroy_auth_data();
/* echo $_SERVER['PHP_AUTH_USER'];
echo $_SERVER['PHP_AUTH_PW'];
exit; */
header("Location:index.php");