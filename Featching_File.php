<?php
if (file_exists("demo.txt")) {
    echo filesize("demo.txt"); // size of file
    echo "\n <br> ";
    echo filemtime("demo.txt"); // last modified time
}

?>

