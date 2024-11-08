<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW RESULT</title>
</head>
<body>
<?php

$fullname = (isset($_GET['name'])) ? $_GET['name'] : "";
$sampleage = (isset($_GET['age'])) ? $_GET['age'] : "";
$sex = (isset($_GET['gender'])) ? $_GET['gender'] : "";

$result = "";
$result = ($sampleage >= 19) ? "ADULT" : "MINOR";

//   $fullname = $_POST['name'];
//               $sampleage = $_POST['age'];
//               $sex = $_POST['gender'];
//               $result ="";
//               $result = ($sampleage >= 19) ? "ADULT" : "MINOR";
?>

    <h2>Name: <?php echo $fullname;?></h2>
    <h2>Age: <?php echo $sampleage;?></h2>
    <h2>Gender: <?php echo $sex;?></h2>
    <h2>Result: <?php echo $sex;?></h2>


</body>
</html>