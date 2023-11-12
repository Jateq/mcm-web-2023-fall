<?php
include 'fourConnect.php';
session_start ();
if(isset($_SESSION["login"])) {
    header("location:fourSuccessful.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e3e3e3;
        }

        div{
            display: flex;
            flex-direction: column;
        }
        .button{
            margin-left: 150px;
            margin-top: 20px;
            padding: 5px 10px;
            background-color: #1d4b8f;
            color:white;
            border: solid 1px white;
            border-radius: 5px;
            transition: 0.4s;
            font-size: 15px;

        }
        .button:hover{
            background-color: white;
            color: #1d4b8f;
            border: solid 1px #1d4b8f;
        }
        a{
            text-decoration: none;
        }
        .message {
            text-align: center;
            margin-top: 80px ;
        }
    </style>
</head>
<body>
<h1>Login</h1>
<form action="fourLoginProcess.php" method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input class="button" type="submit" value="Login">
</form>
</body>
</html>
