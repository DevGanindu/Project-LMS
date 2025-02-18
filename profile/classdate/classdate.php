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
<head><title>Shedule</title>
<style>
    .con{
        border:3px solid #000000;
        border-radius:25px;
        padding:40px;
        width:70%;
        height:auto;
        font-size:70px;
        text-align:center;

    }


</style>



</head>

<body>

<?php

// fetch data from database

$QUARY="SELECT * FROM ttabel";
$RESULT=mysqli_query($conn,$QUARY);
$data=mysqli_fetch_array($RESULT);
$DATE=$data['date'];
$TIME=$data['time'];
$LESS=$data['lesson'];

?>
<div class="con">
    Your Class will be held on <b> <?php echo $DATE ;?> </b>at <b> <?php echo $TIME; ?> </b>.<br>
    <b> <?php echo $LESS; ?> </b> lesson will be covered on that day...
</div>

</body>


</html>
