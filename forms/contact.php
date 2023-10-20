<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "prasadsmart2002@email.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Thank you for your message. I will get back to you soon.";
} else {
    echo "Something went wrong. Please try again later.";
}
?>
