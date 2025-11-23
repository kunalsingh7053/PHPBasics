
<?php
$oldName = "file.txt";       // existing file name
$newName = "newname.txt";    // new file name

if (rename($oldName, $newName)) {
    echo "File renamed successfully from $oldName to $newName";
} else {
    echo "Error: Unable to rename the file!";
}
?>
