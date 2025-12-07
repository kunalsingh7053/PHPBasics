<?php

setcookie("user","",time()-3600); // Delete the cookie by setting its expiration time in the past
echo "Cookie 'user' has been deleted.";

?>