<?php
session_start();
function login(){
    $user = array('admin','sabbir','kamal','jamal');
    $pass = array('1234');
    if(isset($_POST['submit'])){
        if(in_array($_POST['user'], $user) && in_array($_POST['pass'], $pass)){
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pass'] = $_POST['pass'];
            $_SESSION['login'] = true;
            header("Location: dashboard.php");
            exit();
        }
    }
}
function logout(){
    session_unset();
    session_destroy();
}
function is_login(){
    if(!isset($_SESSION['login']) && $_SESSION['login'] != true){
        header("Location: login.php");
        exit();
    }
}
function is_logout(){
    if(isset($_SESSION['login']) && $_SESSION['login'] == true){
        header("Location: dashboard.php");
        exit();
    }
}