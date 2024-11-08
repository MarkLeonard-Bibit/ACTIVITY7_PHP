<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
    header('location:../index.php');
    exit();
}

// Check if form data exists in the session
if (isset($_SESSION['name'], $_SESSION['age'], $_SESSION['gender'])) {
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    $gender = $_SESSION['gender'];
} else {
    echo "No information available. Please go back and submit the form.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Details</title>
    <?php include('../layout/style.php'); ?>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }
        .details-container {
            border: 1px solid #007bff;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .details-container h2 {
            font-size: 1.5em;
            color: #007bff;
        }
        .details-container p {
            font-size: 1em;
            color: #555;
        }
        .details-container a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .details-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="sb-nav-fixed">

    <?php include('../layout/header.php'); ?>

    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
                        <div class="details-container">
                            <h2>Submitted Details</h2>
                            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                            <p><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></p>
                            <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
                            <br>
                            <a href="javascript:history.back()">Go Back</a>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>

    <?php include('../layout/script.php'); ?>

</body>
</html>
