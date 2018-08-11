<?php include "ComputeGrades.php"; ?>
<?php include  "House.php"; ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Grades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    //objectcreation
    //$alex = new ComputeGrades(80,99,98,77);

    $house1 = new House();
    echo $house1->wallColor


    $house2 = new SmallHouse();

    ?>
    
</body>
</html>