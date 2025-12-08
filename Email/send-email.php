<?php
$to = "sc23cs301075@medicaps.ac.in";
$subject = "Test Email from PHP";
$message = "This is a test email sent from a PHP script.";
$headers = "From:kunalsingh7053patel@gmail.com";

if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully to $to";
} else {
    echo "Failed to send email.";
}

?>