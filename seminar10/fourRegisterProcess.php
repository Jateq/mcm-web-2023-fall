<?php
include 'fourConnect.php';
session_start ();

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    $_SESSION["login"]="1";
    $_SESSION["username"]=$username;
    $_SESSION["entered"]=time();

    header("location:fourSuccessful.php");
    exit();
} else {
    header("location:fourRegister.php?err=1");
    exit();

}

mysqli_close($conn);
?>
