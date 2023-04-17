<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set up email
$to = 'nfzermeno@gmail.com'; 
$subject = 'New message from ' . $name;
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Send email
if (mail($to, $subject, $body)) {
    // Email sent successfully, redirect to success page
    header('Location: success.html');
} else {
    // Error sending email, redirect to error page
    header('Location: error.html');
}
?>
