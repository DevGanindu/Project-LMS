<?php
//Getting user uploded files
$file = $_FILES['note'];

//Saving file in uploads folder
move_uploaded_file($file['tmp_name'], "notes/" . $file["name"]);


//Redirecting back to home
header('location: upload_note.php');

?>
