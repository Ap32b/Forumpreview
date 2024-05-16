<?php
session_start();

include("DB_connect.php");

if(!isset($_SESSION['userID'])) {
    header("Location: log_in.php");
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['submit'])) {

        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);

        $userID = $_SESSION['userID'];
        $sql = "INSERT INTO posts (userID, title, content) VALUES ('$userID', '$title', '$content')";
        if ($conn->query($sql) === TRUE) {
            echo "New thread created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Thread</title>
</head>
<body>
    <h1>Create a New Thread</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5" required></textarea><br><br>
        <input type="submit" name="submit" value="Create Thread">

        <br>
        
        <a href="dashboard.php">Back to Dashboard</a>

        
    </form>
</body>
</html>
