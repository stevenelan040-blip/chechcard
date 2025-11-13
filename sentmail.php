<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);

    $to = "bhattsanjni729@gmail.com";
    $email_subject = "New Inquiry from Contact Form";
    $message = "
    Name: $name\n
    Phone: $phone\n
    Subject: $subject
    ";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: noreply@yourdomain.com\r\n";

    if (mail($to, $email_subject, $message, $headers)) {
        echo "<h2 style='text-align:center; color:green;'>✅ Your inquiry has been sent successfully!</h2>";
    } else {
        echo "<h2 style='text-align:center; color:red;'>❌ Failed to send message. Try again later.</h2>";
    }
} else {
    echo "Access denied!";
}
?>