<!-- <?php
//database connection
$server = 'localhost';
$user= 'root';
$password='';
$dbname='class';

$conn=mysqli_connect($server,$user,$password,$dbname);

//connection error reporting

if(!$conn){
    die("Connection Error". mysqli_connect_error());
}

?> -->

<html>
<head>
    <link rel="stylesheet" href="upload_paper.css">
    <title>Add Papers</title>
</head>

<body>

<label><h2> Upload Paper</h2></label>

<form method="post" enctype="multipart/form-data" action="upload.php">

<div class="linkcon">
    <input type="file" placeholder="Choose Your Paper" name="file" class="papr"  required> 
</div>

<input type="submit" value="Upload" class="btn">

</form>
</body>

</html>


