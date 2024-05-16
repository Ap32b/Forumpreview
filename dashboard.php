<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="dashboard_container">
        <h1>Welcome to Your Dashboard</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <p>This is a basic dashboard. You can add your content and functionality here.</p>
        <a href="thread_create.php">Create a Thread</a> <!-- Add this line -->
        <a href="view_threads.php">View Threads</a>
        <br>
        <a href="log_out.php">Logout</a>
    </div>
</body>
</html>
