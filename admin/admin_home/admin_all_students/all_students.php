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

<head> <title> All Students </title></head>

<body> 


<table border="3px" >
    <tr> <th colspan="5"> ALL STUDENTS</th></tr>
    <tr><th> ID</th><th> Name</th> <th>Exam Year</th> <th>Education Center</th> <th>Whatsapp No:</th></tr>

<?php



 // Select Tabel
 $query= "SELECT stid,fname,lname,exyear,educenter,whtsno FROM student";

 //Connect Database with tabel
 $result=mysqli_query($conn,$query);
  
 //fetch data to page
 
 while($data=mysqli_fetch_array($result)){
 

 ?>
 
    <tr><td><?php echo $ID;?></td><td><?php echo $NAME;?></td> <td><?php echo $EXYEAR;?></td><td><?php echo $EDUC;?></td><td><?php echo $WAHTSNO;?></td></tr>
<?php  } ?>

</table>
</body>


</html>