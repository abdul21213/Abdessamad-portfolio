<!-- process_form.php -->


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$bedanktMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $message = $_POST["message"]; // New field for message

    $to = "a.hajiibrahim@outlook.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nCompany: $company\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        $bedanktMessage = 'Bedankt!';
    } else {
        $bedanktMessage = 'Error: Unable to send the email. Please try again later.';
    }
}
?>

