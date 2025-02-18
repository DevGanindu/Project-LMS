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
<title>Register Form</title>
<link href="stylesheet_reg_form.css" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial"/>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
</head>
<body>
<div class="main"><b>
<fieldset class="fieldset">
<legend id="leg"><h2>Your Personal Information</h2></legend>
<br><br>
<Form method="post">
First Name: 
<input type="text" required name="fname"><br><br> 
Last Name:
<input type="text" required name="lname"><br><br>
<!-- Select Gender:<br>
<input type="radio" name="gender" >Male
<input type="radio" name="gender">Female<br><br> -->
Exam Year:
	<select name="exyear">
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
	</select>
	<br>
Education Center:
	<select name="edu">
		<option>Iganra</option>
		<option>Suratha</option>
		<option>Rotary</option>
	</select>
	<br>
Creat Password:
	<input type="password" placeholder="Must be at least 8 characters long" minlength="8" required name="pass"><br><br>
<!-- Comfirm Password:
	<input type="password" required><br><br>-->
Whatsapp Number:
	<input type="text"  maxlength="10"  required name="wtsno"><br><br> 
Email:
	<input type="email" placeholder="insert your email" required name="email"><br><br>
<!-- Your Parents Mobile Number:
	<input type="text"  maxlength="10"required><br><br> -->
Student ID:<input type="number" maxlength="5" name="stid"><br><br>


<input type="submit" value="Register" class="btn">


<?php
$FNAME= $_POST['fname'];
$LNAME= $_POST['lname'];
$EXYEAR= $_POST['exyear'];
$EDU= $_POST['edu'];
$PASS= $_POST['pass'];
$WHTSNO= $_POST['wtsno'];
$EMAIL= $_POST['email'];
$STID= $_POST['stid'];

$query="INSERT INTO student VALUES('$STID','$FNAME','$LNAME','$EXYEAR','$EDU','$PASS','$WHTSNO','$EMAIL')";

if($conn->query($query)==true){
    echo"Succcess";
}else{
    echo"Could Not Creat Your Profile:". $conn->error,"<br/>",$query;
}


$conn->close();

?>



</form>
</fieldset>
</b>
</div>
</body>
</html>



