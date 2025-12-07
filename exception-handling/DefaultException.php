<?php

try{
    $age = 16;
    if($age < 18){
        throw new Exception("User must be 18 or above.");
    }
}
catch(EXception $e)
{
    echo "Default Exception: " . $e->getMessage();
}
finally{
    echo "\nThis block always runs.";
}

?>