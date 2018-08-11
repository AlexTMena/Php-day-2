<?php 

    session_start();
    $_SESSION['usename'] = "ADMINISTRATOR";

    if(!isset($_SESSION['totalAmount'])){
        $_SESSION['totalAmount'] = 0;
    }

    if(isset($_GET['buy'])){
        $_SESSION['totalAmount'] += $_GET['buy'];
        header("location:page1.php");
    }

    if(isset($_GET['unbuy'])){
        if ($_SESSION['totalAmount'] == 0) {
            echo "You don't buy anything";
        } else{
            $_SESSION['totalAmount'] -= $_GET['unbuy'];
            header("location:page1.php");
        }
    }

    if(isset($_GET['reset'])){
        $_SESSION['totalAmount'] = $_GET['reset'];
        header("location:page1.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body bgcolor="#aaa">
    <div class="container">
        <?php include 'menu.php'; ?>
    
        <p>This is page 1</p>
        <p>Total Amount: PHP <?php echo $_SESSION['totalAmount']; ?>
        <p><a href="page1.php?buy=500">Buy T-shirt for Php 500.00 Only!</a></p>
        <p><a href="page1.php?unbuy=500">Undo Buy T-shirt for Php 500.00 </a></p>
        <p><a href="page1.php?reset=0">Unbuy ALL</a></p>
    </div>

    
</body>
</html>