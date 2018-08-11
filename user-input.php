<?php 

if(isset($_POST['btnComputeGradeAverage'])) {
    echo "Form submitted<br>";
    $math = $_POST['txtMathGrade'];
    echo "Grade in Math: {$math} <br>";

    $science = $_POST['txtScienceGrade'];
    echo "Grade in Science: {$science} <br>";

    $english = $_POST['txtEnglishGrade'];
    echo "Grade in English: {$english}<br> ";

    $ave = ($math + $science + $english)/3;
    echo "Your average is {$ave}";
}else {
    echo "Form not yet submitted";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <hr>
    <form action="user-input.php" method="post" enctype="multipart/form-data">
        <label>Enter Math Grade</label>
        <input type="text" name="txtMathGrade" required>
        <br>
        <label>Enter Science Grade</label>
        <input type="text" name="txtScienceGrade" required>
        <br>
        <label>Enter English Grade</label>
        <input type="text" name="txtEnglishGrade" required>
        <br>
        <button type="submit" name="btnComputeGradeAverage">Compute Average</button>
    </form>

<hr class="newCalculator">

    <h1>Let's compute your Salary</h1>
    <form action="user-input.php" method="post" enctype="multipart/form-data">
        <!-- Personal detail -->
        <label>Name of Employee: </label><br>
        <input type="text" name="txtNameOfEmployee" required><br>
        
        <!-- Earning factors -->
        <label>No. of Hours Working: </label><br>
        <input type="text" name="txtNoOfHours" required><br>
        <label>Rate Per Hour: </label><br>
        <input type="text" name="txtRatePerHour" required><br>

        <!-- Deduction Factors -->
        <label>Tax: </label><br>
        <input type="text" name="txtTax" required><br>
        <label>SSS: </label><br>
        <input type="text" name="txtSss" required><br>
        <label>Pag-ibig: </label><br>
        <input type="text" name="txtPagibig" required><br>
        <label>Philhealth: </label><br>
        <input type="text" name="txtPhilHealth" required><br>

        <button type="submit" name="btnComputeSalary">Compute Net Salary</button>
        
    </form>

    <?php 



    if(isset($_POST['btnComputeSalary'])){
    
        $nameOfEmployee = $_POST['txtNameOfEmployee'];

        $noOfHours = $_POST['txtNoOfHours'];
        $ratePerHour = $_POST['txtRatePerHour'];

        $tax = $_POST['txtTax'];
        $txtSss = $_POST['txtSss'];
        $pagibig = $_POST['txtPagibig'];
        $philHealth = $_POST['txtPhilHealth'];

        $grossSalary = $noOfHours + $ratePerHour;
        $deduction = $tax + $txtSss + $pagibig + $philHealth;
       
        $netSalary = $grossSalary - $deduction;
        
        echo "Welcome $nameOfEmployee your gross salary is $grossSalary for $noOfHours hours x $ratePerHour pesos.<br> 
        Deduction is $deduction pesos.<br>
        Your net Salary is $netSalary pesos<br>";
    
        }

    ?>

</body>
</html>