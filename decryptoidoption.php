<?php

// echo<<<_END
// <form action = "encryptdecryptkey.php" method = "post"><pre>
// Type of Encryption
// <br>
// Simple Substitution <input type = "radio" name  = "option" id = "1">
// Double Transposition <input type = "radio" name  = "option" id = "2">
// RC4 <input type = "radio" name  = "option" id = "3">
// DES <input type = "radio" name  = "option" id = "4">
// <br>
// <input type="submit" value="SUBMIT">
// <br>
// <br>   
// <p id = "demo"></p>
// <script>
// document.getElementById("demo").innerHTML = 5 + 6;
// </script>
// _END
echo<<<_END
<form action = "decryptoidoption.php" method = "post"> <pre>
Type of Encryption
<br>
<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value = " "> -- select an option -- </option>
    <option value = "encryptdecryptkey.php"> Simple Substitution </option>
    <option value = "encryptdecrypt2keys.php"> Double Transposition </option>
    <option value = "encryptdecryptkey.php"> RC4 </option>
    <option value = "encryptdecryptkey.php"> DES </option>
</select>

_END


?>