<?php
session_start();
include "./../assets/includes/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // LOGIN
    if (isset($_POST['login'])) {

        $stmt = $conn->prepare("SELECT * FROM markt_users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: home.php");
            exit;

        } else {
            $error = "Verkeerde username of password";
        }
    }

    // SIGNUP
    if (isset($_POST['signup'])) {

        $stmt = $conn->prepare("SELECT id FROM markt_users WHERE username = ?");
        $stmt->execute([$username]);

        if ($stmt->fetch()) {

            $error = "Username bestaat al";

        } else {

            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO markt_users (username, password) VALUES (?, ?)");
            $stmt->execute([$username, $hashed]);

            $success = "Account gemaakt! Je kunt nu inloggen.";
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: inlog.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/inlog.css">
</head>
<body>

<?php include "../assets/includes/nav.php"; ?>

<div class="login">
    <h2>Login / Signup</h2>

    <?php if(isset($_SESSION['username'])): ?>
        <p>Welkom <?php echo $_SESSION['username']; ?></p>
        <a href="?logout=1">
            <button class="btn">Uitloggen</button>
        </a>

    <?php else: ?>
        <form method="POST" class="login-form">
            <label for="username">Username:</label>
            <input id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="button-group">
                <button type="submit" name="login" class="btn">Login</button>
                <button type="submit" name="signup" class="btn">Sign Up</button>
            </div>
        </form>

        <?php
        if(isset($error)) echo "<p class='message error'>$error</p>";
        if(isset($success)) echo "<p class='message success'>$success</p>";
        ?>

    <?php endif; ?>
</div>

</body>
</html>