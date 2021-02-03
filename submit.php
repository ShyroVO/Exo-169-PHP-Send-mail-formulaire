<?php
include './corps/head.php';

$from = $_POST['from'];
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";

// Visualisation message
echo $from ."<br>". $to ."<br>". $subject ."<br>". $message . "<br>";

//Message check
$mailBack = "E-mail is back at home... ... Sorry sir.";

// Check mail to:
if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo $emailErr ."<br>". $mailBack;

} else {
    // Echec OR Success
    $success = mail($to, $subject, $message, $headers);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
        echo 'Error: ' . $errorMessage . "<br>" . $mailBack;

    } else {
        echo "<br>" .'Good bye message!';
    }
}



include './corps/footer.php';