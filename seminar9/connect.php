<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if ($result) {
    $data = array();  // Create an empty array to store the data

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;  // Add each row to the array
    }

    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

?>

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
        }

        div{
            display: flex;
            flex-direction: column;
        }
        button{
            padding: 5px 10px;
            background-color: #1d4b8f;
            color:white;
            border: solid 1px white;
            border-radius: 5px;
            margin-top: 10px;
            transition: 0.4s;
            font-size: 15px;

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
    </style>
</head>
<body>

</body>
</html>



