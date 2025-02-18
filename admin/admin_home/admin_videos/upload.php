<?php
//Getting user uploded files
$file = $_FILES['video'];

//Saving file in uploads folder
move_uploaded_file($file['tmp_name'], "videos/" . $file["name"]);


//Redirecting back to home
header('location: upload_video.php');

?>