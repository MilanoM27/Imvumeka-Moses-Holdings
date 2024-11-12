<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['contact_name']);
    $email = htmlspecialchars($_POST['contact_email']);
    $message = htmlspecialchars($_POST['contact_message']);

    $to = "imvumekamosespty@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent successfully.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error sending message. Please try again later.'); window.location.href='index.html';</script>";
    }
}
?>
