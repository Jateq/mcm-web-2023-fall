<?php
session_start();

if (isset($_SESSION['user_country']) && !empty($_SESSION['user_country']) && isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
    $user_country = $_SESSION['user_country'];
    $user_name = $_SESSION['user_name'];
} else {
    $user_country = "Fill the form";
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Entered Country</title>
    </head>
    <body>
    <p><?php echo $user_name .  "   " . $user_country; ?></p>
    </body>
    </html>
<?php
