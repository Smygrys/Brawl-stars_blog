<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Brawl Stars Vlog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to Brawl Stars Vlog</h1>
    </header>
    
    <main>
        <p>You are logged in! Enjoy the content on Brawl Stars.</p>
        <a href="logout.php">Logout</a>
    </main>

    <footer>
        <p>Made with ❤️ by Smygrys</p>
    </footer>
</body>
</html>
