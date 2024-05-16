<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit;
}

$conn->set_charset(utf8);

$sql = "SELECT * FROM posts";
$result = $conn->query($sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Threads!</h1>
</head>
<body>
    
</body>
</html>