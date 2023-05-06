<?php
session_start();
require_once('connect.php');
if(isset($_POST['login-client'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM client WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['client'] = $row['email'];
        header('Location: page.html');
        exit();
    }else{
        header('Location: login.php');
        $_SESSION['error'] = 'email ou mot de passe est incorrecte';
    }
}
if(isset($_POST['login-code'])){
    $code = $_POST['code'];
    $sql = "SELECT * FROM client WHERE code='$code'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['client'] = $row['code'];
        header('Location: page.html');
        exit();
    }else{
        header('location: login.php');
        $_SESSION['error'] = 'code est incorrecte';
    }
}
?>