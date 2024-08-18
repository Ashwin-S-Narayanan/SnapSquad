<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$to = "19mgsuriya@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: test@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully.";
} else {
    echo "Failed to send test email.";
}
?>
