<?php
session_start();

$countries = [
    'USA' => 'United States',
    'CAN' => 'Canada',
    'GBR' => 'United Kingdom',
    'FRA' => 'France',
    // Add more countries as needed
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if both the country and name are set
    if (isset($_POST['country']) && !empty($_POST['country']) && isset($_POST['name']) && !empty($_POST['name'])) {
        // Save the country and name in the session
        $_SESSION['user_country'] = $_POST['country'];
        $_SESSION['user_name'] = $_POST['name'];
        // Redirect to testNameAndCountry.php
        header('Location: testNameAndCountry.php');
        exit();
    } else {
        echo "Please enter both the country and your name.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country</title>
</head>
<body>
<form method="post" >
    <label for="name">Enter name</label>
    <input type="text" id="name" name="name" required>
    <label for="country">Enter country</label>
    <input type="text" id="country" name="country" required>
    <button type="submit">Submit</button>
</form>
</body>
</html>
