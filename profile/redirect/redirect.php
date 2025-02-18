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


<?php
                    $linkquery= "SELECT link FROM stu_link";
                    $linkresult=mysqli_query($conn,$linkquery);
                    $linkdata=mysqli_fetch_array($linkresult);
                    header('location: echo $linkdata[link];');


?>

