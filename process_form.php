<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email (replace with your email address)
    $to = "E-MAIL ADDRESS HERE";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Build email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_content, $headers);

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}
?>