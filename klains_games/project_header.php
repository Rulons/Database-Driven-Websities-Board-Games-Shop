<?php
/*
 Talk about following in report:
  - label tags - cross refencing for attribute with id attribute
 * Difference between name and id attributes
 * - keeping code neatly formated for updating
 * - using meter tag
 * using require and include (makes updating easier
 * sort out display if time allows
 
 */
function title_bar($page_title) {
    if (!$page_title) {
        $page_title = "My Great Site!";
    }
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <a href="home.php">About us</a>
    <a href="items.php">Items in Stock</a>
    <a href="contact.php">Contact Us</a>
    <a href="reviews.php">Customer Reviews</a>
    <a href="login.php">Member Login</a>
</nav>

<h1><?= $page_title; ?></h1>



<?php 

 } 
 
 ?>