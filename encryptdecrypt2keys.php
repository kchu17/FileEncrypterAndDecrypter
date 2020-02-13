<?php

echo <<<_END
<form action = "encryptdecrypt2keys.php" method = "post"><pre>
Encrypt
<br>
Enter first key to encrypt:
<br>
Key <input type = "text" name = "content"> 
<br>
Enter seocnd key to encrypt:
<br>
Key <input type = "text" name = "content"> 
<br>
<input type="submit" value="ENCRYPT">
<form action = "enterdoublekeys.php" method = "post"><pre>
<br>
Decrypt
<br>
Enter first key to decrypt:
<br>
key <input type = "text" name = "content"> 
<br>
Enter second key to decrypt:
<br>
key <input type = "text" name = "content"> 
<br>
<input type="submit" value="DECRYPT"><br>
<br>     
_END


?>