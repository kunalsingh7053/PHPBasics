<?php
$fp = fopen("Writed.txt", "w");  // open file for writing

fwrite($fp, "Hello PHP!\n");
fwrite($fp, "This is new content written using write mode.");

fclose($fp);
echo "Data written successfully!";
?>
