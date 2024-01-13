<?php
session_start();
echo $_SERVER['PHP_AUTH_USER'];
echo $_SERVER['PHP_AUTH_PW'];
exit;
?>
<h1>Hard coded authentication</h1>
<?php
// header('WWW-Authenticate: Basic Realm="Book Projects"');
// header("HTTP/1.1 401 Unauthorized");
if(is_null($_SERVER['PHP_AUTH_USER']) && is_null($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic Realm="Authentication"');
    header("HTTP/1.1 401 Unauthorized");
}
if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW'])) {
 header('WWW-Authenticate: Basic Realm="Authentication"');
 header("HTTP/1.1 401 Unauthorized");
 exit;
}
else{
    $uname = $_SERVER['PHP_AUTH_USER'];
    $upass = $_SERVER['PHP_AUTH_PW'];
    if($uname == "admin" && $upass == "007"){
        //set session value and redirect to dashboard
        $_SESSION['user'] = "Administrator";
        $_SESSION['loggedin'] = true;

        header("location: dashboard.php");
    }
    else{
        // $_SESSION['loggedin'] = false;
        header('WWW-Authenticate: Basic Realm="Authentication"');
    header("HTTP/1.1 401 Unauthorized"); 
    }
}
?>
<h1>welcome</h1>