<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "tceolin1710@gmail.com";
    $subject = "Nouveau message du formulaire de contact";
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    header("Location: confirmation.html");
    exit();
}
?>
