<?php
session_start ();
if(!isset($_SESSION["login"])) {
    header("location:fourLogin.php");
    exit();
}

$loginTime = $_SESSION["entered"];
$currentTimestamp = time();
$timeElapsed = $currentTimestamp - $loginTime;

// Format the time elapsed for display
$formattedTimeElapsed = formatTimeElapsed($timeElapsed);

function formatTimeElapsed($seconds) {
    if ($seconds < 60) {
        return "$seconds seconds ago";
    } else{
        $minutes = floor($seconds / 60);
        return "$minutes minutes ago";
    }
}
?>

<div>

<h1>Hey <?php echo $_SESSION["username"]?>! welcome to main page </h1>
<h3>You logged in <?php echo $formattedTimeElapsed; ?></h3>
</div>

