<?php
session_start();

if (isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email'];
} else {
    $user_email = "";
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form with Auto-Filled Email</title>
    </head>
    <body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user_email; ?>" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    </body>
    </html>
<?php
