<?php 
if(isset($_POST['btnUpload'])) {
    // Array ( [myFile] => Array ( [name] => upload.xlsx [type] => application/vnd.openxmlformats-officedocument.spreadsheetml.sheet [tmp_name] => C:\xampp\tmp\php7CE2.tmp [error] => 0 [size] => 8040 ) )
    
    if ($_FILES['myfile']['size'] < 100000) {
        $filename = md5(date('Ymdhis')).'_'.$_FILES['myFile']['name'];
        move_uploaded_file($_FILES['myFile']['tmp_name'],"./uploads/{$filename}");
    }else {
        echo "<script>alert(waw!)</script>";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

    <h1> Upload File </h1>
    <hr>
    <form action="php-upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile" required><br>
        <button type="submit" name="btnUpload">Upload my file </button>
    </form>
</body>
</html>