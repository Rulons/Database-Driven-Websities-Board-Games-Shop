<?php
require_once "database.php";
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    // this uses prepared statements so is not vulnerable to injection
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $_POST['email']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    print_r($user);

    echo $user["password"];
    if (password_verify($_POST['password'], $user["password"])) {
        $_SESSION["logged_in"] = $user["user_id"];
        header('Location: members.php');
    } else {
        echo "<h1>Invalid password.</h2>";
    }

}

require_once "project_header.php";
title_bar("Member Login");
?>

<h2>Login</h2>

<form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Login">
</form>

<?php
// Optional: show entered data (for testing only)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];
    echo "<p>You entered:<br>Username: $username<br>Password: $password</p>";
}

require_once "footer.php";
?>
