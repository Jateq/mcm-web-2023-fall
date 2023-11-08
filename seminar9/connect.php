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




