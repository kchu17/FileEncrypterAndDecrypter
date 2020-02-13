<?php
//require_once 'login.php';
// $hn = "localhost"
// $hn = "localhost";
// $un = "username";
// $pw = "password";
// $db = "mydb";
// $conn = new mysqli($hn, $un, $pw, $db);
// if ($conn-> connect_error) die("Connection failed: " . $conn-> connect_error);

if(isset ($_POST['content']) && isset($_POST['option']) && isset($_POST['option2']) && )
{   
    $textInput = get_post($conn, 'content');
    $option = get_post($conn, 'option');
    $option2 = get_post($conn, 'option2');
    $content = file_get_contents($textInput);
    $query = "INSERT INTO filetable ($textinput) VALUES". "('$textInput')";
    $result = $conn -> query($query);
    if(!$result) echo "INSERT failled: $query<br>". $conn -> error . "<br><br>";
}

echo
'<html>
<form action = "filetextread.php" method = "post"><pre>
Select text file to upload to encrypt:
Content <br> <input type = "file" name = "content" id="fileToUpload"
<br>
<br>
Type of Encryption
Simple Substitution <input type = "radio" name  = "option" value = "1">
Double Transposition <input type = "radio" name  = "option" value = "2">
RC4 <input type = "radio" name  = "option" value = "3">
DES <input type = "radio" name  = "option" value = "4">
<br>
<br>
Encrypt or Decrypt
Encrypt <input type = "radio" name  = "option2" value = "1">
Decrypt <input type = "radio" name = "option2" value = "2">
<br>
<br>
Enter Key
Key <input type

<input type="submit" value="ADD RECORD"><br><br>     
</pre></form>
</html>';

echo
'<html>
OR
</html>
';




//Enter String
echo
'<html>
<form action = "filextextread.php" method = "post"><pre>
Enter text to encrypt:
Text <input type = "text" name = "content"> <br><br>
Simple Substitution <input type = "radio" name  = "option" value = "1">
Double Transposition <input type = "radio" name  = "option" value = "2">
RC4 <input type = "radio" name  = "option" value = "3">
DES <input type = "radio" name  = "option" value = "4">


<input type="submit" value="ADD RECORD"><br><br>     
</pre></form>
</html>
';

?>