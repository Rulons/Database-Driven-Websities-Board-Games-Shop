<?php
session_start();
require_once "database.php";

// if (!isset($_SESSION["logged_in"])) {
//     header("Location: login.php");
//     exit;
// }

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (create_user($username, $email, $password)) {
        $message = "User created successfully!";
    } else {
        $message = "Error creating user.";
    }
}

require_once "project_header.php";
title_bar("Create User");
?>

<p><?= $message; ?></p>

 <section>
<form method="post">
    <!--fix the accessibility by using id and for attribute - also remove br tags- use css instead -->
    <label>Newyyy Name:</label><br>
    <input type="text" name="name" required><br><br>
    <label>New Email Address:</label><br>
    <input type="text" name="email" required><br><br>

    <label>New Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Create User</button>
    
    
</form>
 </section>
 <section>
        <!--PUT THIS IN ALL PAGES OF MEMBERS AREA -->
        <ul>
            <li><a href="create_user.php">Create User</a></li>
            <li><a href="create_item.php">Create a New Item</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </section>

<?php require_once "footer.php"; ?>

