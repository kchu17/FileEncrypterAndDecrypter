<?php 
	require_once 'dbh.inc.php';

if(isset($_POST['submit'])) {
	
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpname = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];


	switch($_FILES['file']['type']) {
		case 'text/plain'   :$ext = 'txt'; break;
		default             :$ext = ''; break;
	}
	echo "<script>alert($ext);</script>";
	if ($ext === 'txt') {
		if ($fileError === 0) {
			if ($fileSize < 5000) {
				$contents = mysql_fix_string($conn, file_get_contents($fileTmpname));

				$stmt = $conn->prepare('INSERT INTO uploadsys (contentName, fileContent) VALUES ( ?, ?)');

				$stmt->bind_param('ss', $fileName, $contents);

				$stmt->execute();

				$stmt->close();



				header("Location: ../includes/logout.inc.php?uploadsuccess");
			} else {
				echo "Your file is too big!";
			}
		} else {
			echo "Ther was an error while you are uploading the file.";
		}
	} else {
		echo "You cannot upload files of this type.";
	}
}

function mysql_fix_string($conn, $string) {
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return $conn->real_escape_string($string);
}
?>

