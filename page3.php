<?php 

    session_start();

    if(!isset($_SESSION['totalAmount'])){
        $_SESSION['totalAmount'] = 0;
    }

    if(isset($_GET['buy'])){
        $_SESSION['totalAmount'] += $_GET['buy'];
        header("location:page3.php");
    }

    if(isset($_GET['unbuy'])){
        if ($_SESSION['totalAmount'] < 1000) {
            echo "You don't buy anything";
        } else{
            $_SESSION['totalAmount'] -= $_GET['unbuy'];
            header("location:page3.php");
        }
    }

    if(isset($_GET['reset'])){
        $_SESSION['totalAmount'] = $_GET['reset'];
        header("location:page3.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body bgcolor="#0f0">
    
    <div class="container">

        <?php include 'menu.php'; ?>
        
        <p>This is page 3</p>
        <p>Total Amount: PHP <?php echo $_SESSION['totalAmount']; ?>
        <p><a href="page3.php?buy=1000">Buy Maong for Php 1000.00 Only!</a></p>
        <p><a href="page3.php?unbuy=1000">Undo Buy Maong for Php 1000.00 </a></p>
        <p><a href="page3.php?reset=0">Unbuy ALL</a></p>
    </di☻v>
    
</body>
</html>