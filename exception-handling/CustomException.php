<?php
class AgeException extends Exception{}
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
function check($x){
    if($x<18)
    {
        throw new AgeException(" user must be 18 or above");
    }
    echo"Valid age";
}
try{
    
    check(15);
}catch(AgeException $e)
{
    echo"Custom Exception".$e->getMessage();
}
finally{
    echo"\n this block always run";
}
?>