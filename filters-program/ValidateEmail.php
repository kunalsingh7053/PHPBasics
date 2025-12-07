<?php
  $email = "kunalsigh@XYZ.COM";

  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "The email address '$email' is valid.";
  } else {
    echo "The email address '$email' is invalid.";
  }
?>