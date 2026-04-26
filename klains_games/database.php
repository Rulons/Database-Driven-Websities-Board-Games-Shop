<?php

//use port 8889 on a mac
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=misc', 'bobby', 'qwerty');
//$pdo = new PDO('mysql:host=localhost;port=3306;dbname=if0_41726991_misc', 'bobby', 'qwerty');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function get_user($username) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function create_user($username, $email, $password) {
    global $pdo;
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) 
              VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $username,
        ':email' => $email,
        ':password' => $hashed));
    return TRUE;
}


 