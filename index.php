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
<title>Log In</title>

<link rel="stylesheet" href="log/stylesheet.css">
<meta name="viewport" content="width=device-width,initial"/>

</head>
<body>

	<div  class="main">
	<div class="bg">
		<h2>Login</h2>
		<form method="post" class="form">

			<div class="up1con">	
				<input type="text" placeholder="Student ID"  name="id" ><br>
			</div>


			<div class="up1con">
				<input type="password" placeholder="Password"  name="pass"><br>
			</div>



			<input type="submit" value="Log In" class="btn"><br><br>




	</form>



			<label class="fup"><a href="recv/recover.html"><b>Forgot your password?</b></a></label><br><br><br>

			<label><b>Not Registerd Yet:</b></label>
		
			<button class="btn1"><a class="btn1a" target="_blank" href="reg/reg_form.php"> Click Here</a></button><br><br>

				<br>

			<?php

error_reporting(0);


$PASSWORD= $_POST['pass'];
$ID= $_POST['id'];

if($ID==0000 and $PASSWORD=="admin"){
	header("location:admin/admin_home/admin_main.html");
	exit;
}


if(!$ID OR $PASSWORD=='' OR $ID==''){
	echo "<b>Try Again</b>";
	exit;
}

// Select Tabel
$query= "SELECT passw FROM student WHERE stid=$ID";


//Connect Database with tabel
$result=mysqli_query($conn,$query);
 
//fetch data to page
$data=mysqli_fetch_array($result);

$REALPASS=$data['passw'];


//Password Checking 
if($REALPASS==$PASSWORD){
	
	$IDQUARY="INSERT INTO pro_logging VALUES('$ID')";
	$idresult=mysqli_query($conn,$IDQUARY);
	header("location: profile/profile.php");
	exit;
}else{

	echo "<label>Try Again</label>";
}


$conn->close();


?>
		<hr>
			<div class="socialm">
				<label><h3>Loging with:</h3></label>

					<img class="img1" src="icon/facebook-new.png"/>
					<img class="img1" src="icon/google-plus.png"/>
					<img class="img1" src="icon/twitter-circled--v2.png"/>
			</div>

	</div>
	<footer><label class="foot">&copy;GP</label></footer>


</div>


</body>
</html>
