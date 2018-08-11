<?php 

    if(isset($_GET['id']) && isset($_GET['name'])){
        echo "URL ID: ".$id = $_GET['id'];
        echo "<br>";
        echo "URL NAME: ".$name = $_GET['name'];
        echo "<br>";
        echo $sql="Select * from table where name like '%$_GET[search]%'";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GET Super Global</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php
        $user = array("Ana" ,"Boy" ,"Mike" ,"Mitch" ,"Shane");

        foreach ($user as $key => $value) {
            echo "<a href='get.php?name={$value}&id=$key'>{$value}</a><br>";
        }
    ?>

</body>
</html>