<?php
require_once('connect.php');
if (isset($_POST['do'])){
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $muse = $_POST['muse'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $conn->query("INSERT INTO client(nom,prenom,date,muse,email,password) Values('$nom','$prenom','$year-$month-$day','$muse','$email','$password')");
    header('location: login.php');
}
?>