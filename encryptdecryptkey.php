<?php

// echo <<<_END
// <form action = "encrptdecrypt.php" method = "post"><pre>
// Encrypt or Decrypt
// <br>
// Encrypt <input type = "radio" name  = "option2" value = "1">
// Decrypt <input type = "radio" name = "option2" value = "2">
// <br>
// <input type="submit" value="SUBMIT">
// _END

echo <<<_END
<form action = "encryptdecryptkey.php" method = "post"><pre>
Encrypt
<br>
Enter key to encrypt:
<br>
Key <input type = "text" name = "content"> 
<br>
<input type="submit" value="ENCRYPT">
<form action = "enterdoublekeys.php" method = "post"><pre>
<br>
Decrypt
<br>
Enter text to decrypt:
<br>
key <input type = "text" name = "content"> 
<br>
<input type="submit" value="DECRYPT"><br>
<br>     
_END


?>