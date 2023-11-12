<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Status</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e3e3e3;
            font-size: 25px;
        }

        div{
            display: flex;
            flex-direction: column;
        }
        button{
            padding: 5px 10px;
            background-color: #1d4b8f;
            color:white;
            font-size: 50px;
            border: solid 1px white;
            border-radius: 5px;
            margin-top: 10px;
            transition: 0.4s;

        }
        button:hover{
            background-color: white;
            color: #1d4b8f;
            border: solid 1px #1d4b8f;
        }
        a{
            text-decoration: none;
        }
        .message {
            text-align: center;

        }

        .auth{
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

    </style>
</head>
<body>
</body>
</html>


<?php
include 'fourConnect.php';

if (!empty($data)) {
    foreach ($data as $row) {
        echo "ID: " . $row['id'] . ", Name: " . $row['username'] . " Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No data available.";
}

mysqli_close($conn);
?>
