<?php
$status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $to = "siddheshparab.309@gmail.com";
    $subject = "New Contact Form Submission from Portfolio by " . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        $status = "success";
    } else {
        $status = "error";
    }
}
?>
