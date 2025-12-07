<?php
session_start();
$_SESSION["username"]="john_doe";
echo "Session 'username' is set to ".$_SESSION["username"];

?>