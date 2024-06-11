<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "khokanaithub@gmail.com"; // Your email address
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n";
    $body .= "From: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // Not a POST request, redirect or handle error
    echo "error";
}
?>
