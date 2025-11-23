<?php
$file = "demo.txt";   // file to be deleted

if (file_exists($file)) {     // check if file exists
    if (unlink($file)) {      // delete the file
        echo "File '$file' deleted successfully!";
    } else {
        echo "Error: Unable to delete the file.";
    }
} else {
    echo "File '$file' does not exist.";
}
?>

