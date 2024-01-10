<h1>Hard coded authentication</h1>
<?php
// header('WWW-Authenticate: Basic Realm="Book Projects"');
// header("HTTP/1.1 401 Unauthorized");
if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW'])) {
 header('WWW-Authenticate: Basic Realm="Authentication"');
 header("HTTP/1.1 401 Unauthorized");
}
else{
    $uname = $_SERVER['PHP_AUTH_USER'];
    $upass = $_SERVER['PHP_AUTH_PW'];
    if($uname == "admin" && $upass == "007"){
        //set session value and redirect to dashboard
        header("location: dashboard.php");
    }
    else{
        header('WWW-Authenticate: Basic Realm="Authentication"');
    header("HTTP/1.1 401 Unauthorized"); 
    }
}
?>