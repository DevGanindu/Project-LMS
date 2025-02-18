
<html>
<head>
    <title>Videos</title>
    <style>
        body{
            margin:0px;
            margin-top:30px;
            background: #3434;
            width:100%
        }

        h2{
            padding: 20px;
            /* font-size:70px; */
        }
        @media (min-width:600px){
        .btn{
            background: #3535;
            padding:5%;
            border-radius:10px;
            
        }
        a{
            text-decoration:none;
            color:#000;
            font-size:50px
        }
        h2{
            font-size:70px;
        }
    }
    </style>
</head>

<body>


<label><center><h2>Watch Previous Classes</h2></center></label><br>

<?php

$files = scandir("../../admin/admin_home/admin_videos/videos");
for ($a = 2; $a < count ($files); $a++){

    //displaying links to download
    ?>
    <p>
        <center><button class="btn"><a  href="../../admin/admin_home/admin_videos/videos/<?php echo $files[$a] ?>" target=_blank><?php echo $files[$a]?></a></button><center>
</p>
<?php




}


?>


</body>

</html>