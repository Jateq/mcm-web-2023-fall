<?php
include 'connect.php';

if (!empty($data)) {
    foreach ($data as $row) {
        echo "ID: " . $row['id'] . ", Name: " . $row['username'] . " Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No data available.";
}

mysqli_close($conn);
?>
