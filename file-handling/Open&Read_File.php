<?php
// Open the file in read mode
$fp = fopen("demo.txt", "r");

if ($fp) {
    echo "<h3>File opened successfully!</h3>";
    
    // Read and display file content
    echo "<b>File Content:</b><br>";
    while(!feof($fp)) {
        echo fgets($fp) . "<br>";
    }

    // Close the file
    fclose($fp);
    echo "<br><b>File closed successfully!</b>";
}
else {
    echo "Unable to open the file.";
}
?>
