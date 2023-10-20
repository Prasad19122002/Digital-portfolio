<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add further processing, validation, and email sending here.

    echo "Thank you for your message, $name. I will get back to you soon.";
} else {
    echo "Something went wrong. Please try again later.";
}
?>
