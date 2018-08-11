<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<!--     
    $_POST      =   get information from the form
    $_GET       =   get information from URL variable
    $_FILES     =   get infomation from the uploaded file
    $_COOKIE    =   we are placing information in the computer of the client. 
-->

    <h1>Cookie</h1>
    <?php
    if(!isset($_GET['logout'])){
        setcookie('employee_name','John Doe',time()+(86400*30),"/");
        setcookie('order','Pizza Pie',time()+(86400*30),"/");
    }else{
        setcookie('employee_name','',time()+(-86400*30),"/");
        setcookie('order','',time()+(-86400*30),"/");
    }

    if(isset($_COOKIE['employee_name'])){
        echo "welcome Cookie ".$_COOKIE['employee_name'];
        echo "<br>";
        echo "Order ".$_COOKIE['order'];
        echo "<br>";
        echo "<a href='cookie.php?logout=true'>Log-out</a>";
    } else {
        echo "Cookie not found";
        echo "<br>";
        echo "<a href='cookie.php'>Log-out</a>";

    }
    
    ?>



</body>
</html>