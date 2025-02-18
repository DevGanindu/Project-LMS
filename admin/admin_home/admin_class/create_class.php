<?php
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

?>

<html>
<head>
    <link rel="stylesheet" href="create_class.css">
    <title>Create Class</title> </head>

<body>

<label><h2> Create Online Class</h2></label>

<form method="post">
<div class="idcon">
   
</div>


<div class="linkcon">
    <input type="text" placeholder="Paste Your Link Here" name="link" class="link"> 
</div>

<input type="submit" value="Create" class="btn">

<?php
$LINK= $_POST['link'];

$ttruncate="TRUNCATE TABLE stu_link";
$ttRESULT=mysqli_query($conn,$ttruncate);

$query="INSERT INTO stu_link VALUES('$LINK')";


if($conn->query($query)==true){
    echo"Succcess";
}else{
    echo"Could Not Creat Your Profile:". $conn->error,"<br/>",$query;
}


$conn->close();

?>

</form>
</body>

</html>