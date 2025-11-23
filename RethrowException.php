<?php

function demo(){
    try{

        throw new Exception("INNER EXCEPTION");

    }
    catch(Exception $e){
    echo "Inner Catch: " . $e->getMessage() . "\n";
    throw $e; // Rethrow the exception
    }
}
try{
    demo();
}
catch(Exception $e){
    echo "Outer Catch: " . $e->getMessage() . "\n";
}



?>