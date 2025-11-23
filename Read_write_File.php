<?php
$fp = fopen("Writed.txt", "r+");  // open file for reading and writing

echo"<b>Before Writing..</br>";
while(!feof($fp)){
    echo fgets($fp)."<br>"; // read the content of the file one line at a time.
}
fseek($fp,0); // move the file pointer to the beginning of the file.
fwrite($fp, "This content is written using read and write mode.\n");

fclose($fp);
echo "Data written successfully!";
?>