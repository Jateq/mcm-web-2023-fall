<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>



    <?php

    function isLuhnValid($number) {
        $sum = 0;
        $numDigits = strlen($number);
        $parity = $numDigits % 2;

        for ($i = $numDigits - 1; $i >= 0; $i--) {
            $digit = (int)$number[$i];
            if ($i % 2 == $parity) {
                $digit *= 2;
                if ($digit > 9) {
                    $digit -= 9;
                }
            }
            $sum += $digit;
        }

        return $sum % 10 == 0;
    }


    if(isset($_POST["name"]) && isset($_POST["section"]) && isset($_POST["credit_card"]) && isset($_POST["payment_method"])) {
        $name = $_POST['name'];
        $section = $_POST['section'];
        $credit = $_POST['credit_card'];
        $card_type = $_POST['payment_method'];

        if ($name !== "" && $section !== "" && $credit !== "" && $card_type !== "") {
            $credit_pattern = "/^([4-5]\d{3}-?\d{4}-?\d{4}-?\d{4})$/"; // Pattern for Visa and MasterCard
            if(preg_match($credit_pattern, $credit) && ($card_type == "visa" && ($credit[0] == 4)) || ($card_type == "mastercard" && ($credit[0] == 5))) {
                if (isLuhnValid($credit)) {
                    $data = "$name;$section;$credit;$card_type\n";

                    echo "
                <h1>Thanks, sucker!</h1>
                <p>Your information has been recorded.</p>
                ";

                    $file = fopen('sucker.txt', 'a'); //  'append' mode

                    fwrite($file, $data);

                    fclose($file);
                } else{
                    echo "
                <h1>Do not fool us</h1>
                <p>Luhn algorithm is not satisfied.</p>
                ";
                }
            }
            else{
                echo "
                <h1>Sorry</h1>
                <p>You did not provide a valid card number. <a href='buyagrade.html'>Try again?</a></p>
                ";
            }

        } else {
            echo "
                <h1>Sorry</h1>
                <p>You did not fill out the form completely. <a href='buyagrade.html'>Try again?</a></p>
                ";
        }
    } else {
        echo "
                <h1>Sorry</h1>
                <p>You did not fill out the form completely. <a href='buyagrade.html'>Try again?</a></p>
                ";
    }
    ?>

    <?php
    if (isset($name) && isset($section) && isset($credit) && isset($card_type)) {
        $credit_pattern = "/^([4-5]\d{3}-?\d{4}-?\d{4}-?\d{4})$/"; //
        if ($name !== "" && $section !== "" && $credit !== "" && $card_type !== "" && (preg_match($credit_pattern, $credit)) && ($card_type == "visa" && ($credit[0] == 4)) || ($card_type == "mastercard" && ($credit[0] == 5))) {
            if (isLuhnValid($credit)) {
                echo "<dl>
                <dt>Name</dt>
                <dd>$name</dd>
                <dt>Section</dt>
                <dd>$section</dd>
                <dt>Credit Card</dt>
                <dd>$credit ($card_type)</dd>
            </dl>";
                echo "<dt>Here are all the suckers who have submitted here:</dt> <dl></dl>";
                $file = fopen('sucker.txt', 'r'); // Open the file in 'read' mode
//
//            if ($file) {
//                while (($line = fgets($file)) !== false) {
//                    echo "<p>$line<p>";
//                }
//            }

                $content = file_get_contents('sucker.txt');

                echo $content;
                fclose($file); // Close the file
            }
        }
    }
    ?>




	</body>
</html>