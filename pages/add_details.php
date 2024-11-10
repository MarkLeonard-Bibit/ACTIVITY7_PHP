<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $student = [
        "name" => $_POST["name"],
        "age" => $_POST["age"],
        "gender" => $_POST["gender"]
    ];

    // Store student data in the session
    $_SESSION['students'][] = $student;

    // Redirect to showData.php to display the stored data
    header("Location: show_data.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <?php include('../layout/style.php');?>
    </head>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
        .container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .form-container, .details-container {
            border: 1px solid #007bff;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h2, .details-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #007bff;
        }
        .form-container label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #007bff;
        }
        .form-container input, .form-container select, .form-container button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #007bff;
            font-size: 1em;
        }
        .form-container button {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .form-container button[type="reset"] {
            background-color: #6c757d;
            margin-top: 0;
        }
        .form-container button[type="reset"]:hover {
            background-color: #5a6268;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    <body class="sb-nav-fixed">

        <?php include('../layout/header.php');?>

        <div id="layoutSidenav">
            <?php include('../layout/navigation.php');?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="container">
                            <!-- Add Form Section -->
                            <div class="form-container">
                                <h2>Add Form</h2>
                                <form action="" method="POST">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Enter name" required>

                                    <label for="age">Age:</label>
                                    <input type="number" id="age" name="age" placeholder="Enter age" required>

                                    <label for="gender">Gender:</label>
                                    <select id="gender" name="gender" required>
                                    <option value="" disabled selected>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    </select>


                                    <button type="submit" name="submit">Submit</button>
                                    <button type="reset">Clear</button>
                                </form>
                                <br>
                                <a href="show_data.php">View Details</a>
                            </div> 
                    </div>
                </main>
                <?php include('../layout/footer.php');?>
            </div>
        </div>
        <?php include('../layout/script.php');?>
    </body>
</html>
