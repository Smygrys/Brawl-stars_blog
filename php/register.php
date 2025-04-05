<?php
include('php/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt the password

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Brawl Stars Vlog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Register</h1>
    </header>
    
    <main>
        <form method="POST" action="register.php">
            <label>Username:</label>
            <input type="text" name="username" required />
            <label>Email:</label>
            <input type="email" name="email" required />
            <label>Password:</label>
            <input type="password" name="password" required />
            <button type="submit">Register</button>
        </form>
    </main>

    <footer>
        <p>Made with ❤️ by Smygrys</p>
    </footer>
</body>
</html>
