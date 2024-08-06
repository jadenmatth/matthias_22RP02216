<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require 'db.php';
require 'navbar.php'; // Include the navbar

// Fetch metrics from the database
$student_count_query = "SELECT COUNT(*) AS count FROM students";
$student_count_result = mysqli_query($conn, $student_count_query);
$student_count = mysqli_fetch_assoc($student_count_result)['count'];

$user_count_query = "SELECT COUNT(*) AS count FROM users";
$user_count_result = mysqli_query($conn, $user_count_query);
$user_count = mysqli_fetch_assoc($user_count_result)['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.2/css/bulma.min.css"> <!-- Bulma CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" defer></script> <!-- Font Awesome -->
</head>
<body>


<div class="container mt-4">
    <h1 class="title">Dashboard</h1>
    <div class="columns">
        <!-- Students Card -->
        <div class="column is-one-third">
            <div class="box has-background-primary has-text-white">
                <div class="columns">
                    <div class="column is-narrow">
                        <span class="icon is-large">
                            <i class="fas fa-user-graduate fa-3x"></i> <!-- Font Awesome Icon -->
                        </span>
                    </div>
                    <div class="column">
                        <h5 class="title is-5">Total Students</h5>
                        <p class="subtitle is-4"><?php echo htmlspecialchars($student_count); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users Card -->
        <div class="column is-one-third">
            <div class="box has-background-success has-text-white">
                <div class="columns">
                    <div class="column is-narrow">
                        <span class="icon is-large">
                            <i class="fas fa-users fa-3x"></i> <!-- Font Awesome Icon -->
                        </span>
                    </div>
                    <div class="column">
                        <h5 class="title is-5">Total Users</h5>
                        <p class="subtitle is-4"><?php echo htmlspecialchars($user_count); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more metrics cards as needed -->
    </div>
</div>

</body>
</html>
