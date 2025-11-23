<?php
class ZeroException extends Exception{}
class NegativeException extends Exception{}

function test($x)
{
    if($x==0)
    {
        throw new ZeroException("Value cannot be zero.");
    }
    if($x<0)
    {
        throw new NegativeException("Value cannot be negative.");
    }
    return "valid value";
}

try{
    test(-5);
}
catch(ZeroException $e)
{
    echo "Zero Exception:".$e->getMessage();
}
catch(NegativeException $e)
{
    echo "Negative Exception:".$e->getMessage();
}
finally{
    echo "\nThis block always runs.";
}



?>