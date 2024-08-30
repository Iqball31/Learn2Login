<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Admin Page</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
