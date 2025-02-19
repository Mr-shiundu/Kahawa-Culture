<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $location = $_POST['location'];
    $coffee = $_POST['coffee'];
    $message = $_POST['message'];

    // Set the recipient email address.
    $to = "imranshiundu@gmail.com";
    $subject = "New message from Kahawa Culture Form";

    // Create the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Number: $number\n";
    $email_content .= "Location: $location\n";
    $email_content .= "Coffee Preference: $coffee\n";
    $email_content .= "Message:\n$message\n";

    // Send the email.
    mail($to, $subject, $email_content);

    // Redirect or inform the user that the message has been sent.
    echo "Thank you for your message! We will get back to you shortly.";
}
?>
