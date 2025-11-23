<?php
$source = "old.txt";          // original file
$tempCopy = "copy.txt";       // temporary new copy
$finalName = "renamed.txt";   // final renamed file

// Step 1: Copy the file
if (copy($source, $tempCopy)) {
    echo "Step 1: File copied successfully as $tempCopy<br>";
} else {
    die("Error: Unable to copy the file.");
}

// Step 2: Rename the copied file
if (rename($tempCopy, $finalName)) {
    echo "Step 2: File renamed successfully to $finalName<br>";
} else {
    die("Error: Unable to rename the file.");
}

// Step 3: Delete the original file
if (unlink($source)) {
    echo "Step 3: Original file '$source' deleted successfully.";
} else {
    echo "Error: Unable to delete original file.";
}
?>
