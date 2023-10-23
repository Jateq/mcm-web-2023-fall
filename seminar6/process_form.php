<!DOCTYPE html>
<html>
<body>

<h2>Form Data Processed</h2>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$credit = $_POST['credit'];

echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Credit card: $credit<br>";
?>

</body>
</html>
