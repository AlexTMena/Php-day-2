<?php 

    session_start();

    if(!isset($_SESSION['totalAmount'])){
        $_SESSION['totalAmount'] = 0;
    }

    if(isset($_GET['buy'])){
        $_SESSION['totalAmount'] += $_GET['buy'];
        header("location:page2.php");
    }

    if(isset($_GET['unbuy'])){
        if ($_SESSION['totalAmount'] < 1500) {
            echo "You don't buy anything";
        } else{
            $_SESSION['totalAmount'] -= $_GET['unbuy'];
            header("location:page2.php");
        }
    }

    if(isset($_GET['reset'])){
        $_SESSION['totalAmount'] = $_GET['reset'];
        header("location:page2.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body bgcolor="#cec">
    <div class="container">

        <?php include 'menu.php'; ?>
        
        <p>This is page 2</p>
        
        <p>Total Amount: PHP <?php echo $_SESSION['totalAmount']; ?>
        <p><a href="page2.php?buy=1500">Buy Maong for Php 1500.00 Only!</a></p>
        <p><a href="page2.php?unbuy=1500">Undo Buy Maong for Php 1500.00 </a></p>
        <p><a href="page2.php?reset=0">Unbuy ALL</a></p>
    </div>
        
</body>
</html>