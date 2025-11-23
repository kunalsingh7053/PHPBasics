<?php
$source = "writed.txt";
$destination = "Copied_file.txt";
if(copy($source, $destination)){
    echo "File copied successfully.";
} else{
    echo "Failed to copy file.";
}

?>