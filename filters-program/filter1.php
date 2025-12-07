<?php

$email = "kunal@@example!.com";


$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);


if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Original Email: " . $email . "<br>";
    echo "Sanitized Email: " . $sanitizedEmail . "<br>";
    echo "✅ This is a valid email address.";
} else {
    echo "Original Email: " . $email . "<br>";
    echo "Sanitized Email: " . $sanitizedEmail . "<br>";
    echo "❌ This is not a valid email address.";
}
?>
