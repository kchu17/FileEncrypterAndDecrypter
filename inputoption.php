<?php

echo <<<_END
Input Option
<br>
<br>
<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value = " "> -- select an option -- </option>
    <option value = "uploadfile.php"> Upload File </option>
    <option value = "inputstring.php"> Enter Text </option>
</select>
_END;

// function redirect($url)
// {
//     header('Location: '.$url);
//     die();
// }

// if(isset($_POST['table']))
// {
//     $var = $_POST['table'];
//     if($option == '1')
//     {
//         redirect(inputString.php);
//         // echo "Your data text";
//     }
//     // if($option == '2')
//     // {
//     //     redirect
//     //     echo "Your data upload";
//     // }
//     // switch($table)
//     // {
//     //     case '1':
//     //         redirect('inputstring.php')
//     //         break;
//     //     case '2':
//     //         redirect('uploadfile.php')
//     //         break;
//     // }
// }

// if($_POST['table'] == "1")
// {
//     echo '<script type = "text/javascript">window.location = "inputstring.php" </script>';
// }
// if($_POST['table'] == "2")
// {
//     echo '<script type = "text/javascript">window.location = "uploadfile.php" </script>';
// }

?>
