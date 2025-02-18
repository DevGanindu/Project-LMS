<?php
//Getting user uploded files
$file = $_FILES['file'];

//Saving file in uploads folder
move_uploaded_file($file['tmp_name'], "papers/" . $file["name"]);


//Redirecting back to home
header('location: upload_paper.php');

?>
