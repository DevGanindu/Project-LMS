
<html>
<head>
    <title>Papers</title>
    <style>
        body{
            background: #3434;
            width:100%
        }

        h2{
            padding: 20px;
            font-size:70px
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
    }
    </style>
</head>

<body>


<label><center><h2>Download Papers</h2></center></label><br>

<?php

$files = scandir("../../admin/admin_home/admin_papers/papers");
for ($a = 2; $a < count ($files); $a++){

    //displaying links to download
    ?>
    <p>
        <center><button class="btn"><a  href="../../admin/admin_home/admin_papers/papers/<?php echo $files[$a] ?>" download><?php echo $files[$a]?></a></button><center>
</p>
<?php




}


?>


</body>

</html>