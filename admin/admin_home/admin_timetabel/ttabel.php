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
    <title>Class Date</title>
    <style>
        body{
            widht:400px;
            heigth:800px;
        }
    </style>
    </head>
<body>
    <h1> Next Class Date</h1>
    <form method =post>
       <center> <label>Date</label><input type="date" class="dd"  name="ddate" required><br><br></center>
       <center> <label>Time</label><input type="time" class="dd" required name="dtime"><br><br></center>
       <center> <label>Lesson</label><input type="text" class="textbox" required name="leson"><br><br></center>
       <input type="submit" class="btn">
    </form>

    <?php
$DATE= $_POST['ddate'];
$TIME= $_POST['dtime'];
$LESON= $_POST['leson'];

$trunquary="TRUNCATE TABLE ttabel";
$conn->query($trunquary);
$query="INSERT INTO ttabel VALUES('$DATE','$TIME','$LESON')";

if($conn->query($query)==true){
    echo"Succcess";
}else{
    echo"Something Wrong Please try again!". $conn->error,"<br/>",$query;
}


$conn->close();

?>
