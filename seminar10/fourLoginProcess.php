<?php
include 'fourConnect.php';
session_start ();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION["login"]="1";
        $_SESSION["username"]=$username;
        $_SESSION["entered"]=time();
        header("location:fourSuccessful.php");
        exit();
    } else {
        header("location:fourLogin.php?err=1");
        exit();
    }
} else {
    echo "User not found!";
}

mysqli_close($conn);
?>
<?php
