<?php
$numbers = explode(',', $_POST['numbers']);
echo "<h1>Does it contain negative number?</h1>";

$containsNegative = false;

foreach ($numbers as $number) {
    if ($number < 0) {
        $containsNegative = true;
        break;
    }
}

if ($containsNegative) {
    echo "YES";
} else {
    echo "NO";
}
?>
