<?php
require_once "database.php";
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");

    exit;
} else {
    $sql = "SELECT * FROM users WHERE user_id = :user";
    //just for demonstration - delete
    echo("<pre>\n" . $sql . "\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['user' => $_SESSION['logged_in']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $user["name"];
    
    require_once "project_header.php";
    title_bar("Members Area");
    ?>

    <p>Welcome, <?= htmlspecialchars($username); ?>!</p>

    <!--PUT THIS IN ALL PAGES OF MEMBERS AREA -->
    <ul>
        <li><a href="create_user.php">Create User</a></li>
        <li><a href="create_item.php">Create a New Item</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

<?php 
require_once "footer.php"; 
}
?>