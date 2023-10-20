<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add more validation and processing here (e.g., sending an email).
    // For this example, we'll just return a response message.

    $response = "Thank you, $name! Your message has been received.";
    echo $response;
}
?>
