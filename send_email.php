<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "startwithus@gmail.com";
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $description = $_POST["description"];
    $message = "Name: $name\nEmail: $email\nDescription: $description";

    // Send the email
    mail($to, $subject, $message);

    // Redirect or display a thank you message
    header("Location: thank_you.html");
}
?>
