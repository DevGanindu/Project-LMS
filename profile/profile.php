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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_style.css">
    <title>Profile Page</title>
</head>
<body>

        <!-- dp container -->
    <div class="dp_card">
        <div class="dpcon">
            <div class="dp"></div>
        </div>
        <div class="proinfocon">
<?php 

//ID fetch
$IDFQUARY="SELECT logg FROM pro_logging";
$IDRESULT=mysqli_query($conn,$IDFQUARY);
$IDdata=mysqli_fetch_array($IDRESULT);
$STIDD=$IDdata['logg'];

if($STIDD==NULL){
    echo "Log Again";
    exit;
}


 // Select Tabel
$query= "SELECT fname,lname,exyear,educenter FROM student WHERE stid=$STIDD";


//Truncate Tabel logging
$ttruncate="TRUNCATE TABLE pro_logging";
$ttRESULT=mysqli_query($conn,$ttruncate);



//Connect Database with tabel
$result=mysqli_query($conn,$query);
 
//fetch data to page

$data=mysqli_fetch_array($result);

echo $data['fname'] ."  ". $data['lname']."<br/>";
echo $data['exyear']."  "."A/L"."<br/>";
echo $data['educenter']."<br/>";

?>

        </div>
    </div>

    <div class="btncon">
            <!--Join Class Button-->
            <div class="joincontainer">
                <?php
                    $linkquery= "SELECT link FROM stu_link";
                    $linkresult=mysqli_query($conn,$linkquery);
                    $linkdata=mysqli_fetch_array($linkresult);
                ?>
                <button class="joinclzbtn"><a href="<?php echo $linkdata['link']?>" target= "_blank">
                 Join Class</button>
            </div>
            <div class="pp_not_btn">

                <!--Papers Button-->

                    <button class="paperbtn" ><a href="papers/student papers.php">Papers</button>
                
                <!--Notes Button-->
                    <button class="notebtn"><a href="notes/student notes.php">Notes</a></button>

            </div>

            <div class="tt_vb_btn">
                    <!--Class tt-->
                    <button class="ttbtn" href="#"><a href="classdate/classdate.php">Time Table</a></button>
                    <!--Class videos-->
                    <button class="vdbtn" ><a href="videos/student videos.php">Videos</a></button>

            </div>

            <!--Payment Button-->
            <div class="paycon">
                <button class="paybtn" href="#">Payment</button>
            </div>
    </div>


</body>
</html>

