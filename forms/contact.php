<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

    if ($name && $email && $message) {
        $to = "prasadsmart@gmail.com"; // Replace with your email address
        $subject = "Contact Form Submission from $name";
        $headers = "From: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($to, $subject, $emailBody, $headers)) {
            echo "Thank you for your message. I will get back to you soon.";
        } else {
            echo "Oops! Something went wrong while sending your message. Please try again later.";
        }
    } else {
        echo "Invalid data submitted. Please check your inputs and try again.";
    }
} else {
    echo "Invalid request method. Please try again later.";
}
?>
