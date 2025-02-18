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
    <title>Remove Student </title></head>
    <link rel="stylesheet" href="rem_stu.css">

<body>

<label><center><h2>Please Enter Student ID And First Name</h2></center> </label>
<form method="post">
<center><label class="d1">Student ID : </label><input type="number" required name="stid" maxlength="4" class="b1"></center> <br><br>
<center><label class="d1"> First Name : </label> <input type="text" required name="fname" class="b1"> </center>
<center><input type="submit" class="btn"></center>
<?php
 

$ID= $_POST['stid'];
$FNAME= $_POST['fname'];


if(!$ID OR $FNAME=='' OR $ID==''){
	echo "<b>Try Again</b>";
	exit;
}



// Select Tabel
$query= "SELECT fname FROM student WHERE stid=$ID";


//Connect Database with tabel
$result=mysqli_query($conn,$query);
 
//fetch data to page
$data=mysqli_fetch_array($result);

$REALFNAME=$data['fname'];


//Password Checking 
if($REALFNAME==$FNAME){
	
	$QUARY="DELETE FROM student WHERE stid=$ID";
	$result=mysqli_query($conn,$QUARY);
    echo "Successfully Removed";
	exit;
}else{

	echo "<label>Try Again</label>";
}


$conn->close();







?>

</form>
</body>
