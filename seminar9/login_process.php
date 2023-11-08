<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid password!";
    }
} else {
    echo "User not found!";
}

mysqli_close($conn);
?>
<?php
