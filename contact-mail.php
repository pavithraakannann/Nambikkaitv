<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    $captcha_input = $_POST['captcha_input'];

    if ($captcha_input !== $_SESSION['captcha_value']) {
        echo 'Captcha is incorrect.';
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address';
        exit;
    }

    $to = "ambrose@insakal.in";
    $subject = "Nambikkai Television - Contact Details";
    $txt = "Dear Admin,\n\nPlease find the Contact detail:\n\nName: $name\nEmail: $email\nMobile: $telephone\nMessage: $message";
    $headers = "From: ambrose@insakal.in" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $txt, $headers)) {
        header("Location: thank.php");
        exit;
    } else {
        echo 'Message could not be sent.';
    }
}
