<?php
include('php/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Incorrect password!";
        }
    } else {
        $error = "No such user found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Brawl Stars Vlog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    
    <main>
        <form method="POST" action="login.php">
            <label>Username or Email:</label>
            <input type="text" name="username" required />
            <label>Password:</label>
            <input type="password" name="password" required />
            <button type="submit">Log In</button>
        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    </main>

    <footer>
        <p>Made with ❤️ by Smygrys</p>
    </footer>
</body>
</html>
