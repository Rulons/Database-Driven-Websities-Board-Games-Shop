<?php 
require_once "database.php";
require_once "project_header.php"; 
title_bar("Items in Stock"); 


$stmt = $pdo->query("SELECT * FROM items");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<main>

    <ul>
    <?php
        foreach ( $rows as $row ) {
            $theImage = $row["filename"];
            $imageAddress = "image/$theImage";
        
    ?>
        <li><img src ="<?=$imageAddress?>"></li>
        <li><?=$row["name"]?></li>
        <li><?=$row["Description"]?></li>
    <?php    
        }
    ?>
    </ul>
</main>
<?php 
require_once "footer.php"; 
?>
</html>
