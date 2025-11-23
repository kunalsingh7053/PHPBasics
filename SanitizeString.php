<?php

$str = "<h1>Hello World!</h1>";

$clean_string = filter_var($str,FILTER_SANITIZE_STRING);
echo $clean_string;

?>