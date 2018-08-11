<?php include "ComputeGrades.php"; ?>
<?php include  "House.php"; ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Grades</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>

    <?php
    //objectcreation
    //$alex = new ComputeGrades(80,99,98,77);

    $house1 = new House();
    echo "House1: <span class='output'>{$house1->wallColor}</span>";
    echo "<br>";
    echo "House1: <span class='output'>{$house1->noOfDoor}</span>";
    echo "<br>";
    echo "House1: <span class='output'>{$house1->floorSize}</span>";
    echo "<br>";
    echo $house1->turnOnLights();

    echo "<hr>";
    
    $house2 = new SmallHouse();
    echo "House 2: <span class='output'>{$house2->wallColor}</span>";
    echo "<br>";
    echo "House 2: <span class='output'>{$house2->noOfDoor}</span>";
    echo "<br>";
    echo "House 2: <span class='output'>{$house2->floorSize}</span>";
    echo "<br>";
    $house2->turnOnLights();
    ?>
    
</body>
</html>