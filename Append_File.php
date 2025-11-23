<?php
$fp = fopen("Writed.txt","a");

fwrite($fp,"This line appended to end of file.\r\n");
fclose($fp);
echo "Data appended successfully!";


?>