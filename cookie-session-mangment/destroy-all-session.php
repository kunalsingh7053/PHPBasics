<?php

session_start();
session_destroy();
echo "All session variables are destroyed.";
?>