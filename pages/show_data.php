<?php
session_start();

// Initialize the students session array if it doesn't exist
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

// Check if form data was submitted and store it in the session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Add new student details to the students session array
    $_SESSION['students'][] = [
        'name' => $_POST['name'] ?? 'Not provided',
        'age' => $_POST['age'] ?? 'Not provided',
        'gender' => $_POST['gender'] ?? 'Not provided'
    ];

    // Redirect to prevent form resubmission on page reload
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Submitted Data</title>
    <?php include('../layout/style.php'); ?>
    <style>
        
body {
    font-family: "Times New Roman", Times, serif;
}

#datatablesSimple {
    color: blue;
}

#datatablesSimple thead {
    background-color: #e0e7ff; 
    color: #000080; 
}

#datatablesSimple tbody tr {
    background-color: #f0f8ff; 
}

#datatablesSimple tbody tr:hover {
    background-color: #dbe9ff; 
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
                    <h1 class="mt-4">Show Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Show Students Information</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Student Information Table
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['students']) && count($_SESSION['students']) > 0) {
                                        foreach ($_SESSION['students'] as $student) {
                                            echo "<tr>";
                                            echo "<td>" . htmlspecialchars($student['name']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['age']) . "</td>";
                                            echo "<td>" . htmlspecialchars($student['gender']) . "</td>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No data available.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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