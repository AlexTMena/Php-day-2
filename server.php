<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SERVER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <?php
        echo "<pre>";
        print_r ($_SERVER);
        echo "</pre>";

        $ip = $_SERVER['SERVER_ADDR'];
        echo $sql="INSERT INTO table ('ip_address') Values ('$ip')";
    ?>

</body>
</html>