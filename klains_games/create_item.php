<?php
require_once "database.php";
require_once 'project_header.php';

session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php ');
} else {
    // check if the user has clicked the button "Upload"
    if (isset($_POST['uploadfile'])) {

        $filename = $_FILES["choosefile"]["name"];

        $tempname = $_FILES["choosefile"]["tmp_name"];

        $folder = "image/" . $filename;
        // query to insert the submitted data
        $sql = "INSERT INTO items(filename, name, Description) 
                  VALUES (:theFile, :name, :desc)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':theFile' => $filename,
            ':name' => $_POST["name"],
            ':desc' => $_POST["description"]));
        // Add the image to the "image" folder"        
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
        echo "<br><br>";
        $stmt = $pdo->query("SELECT * FROM items");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

require_once "project_header.php";
title_bar("Create Item");
?>

<main>
    <! specify the encoding type of the form using the enctype attribute > 
    <section>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="choosefile" value="" /> 

            <label>Item Name:</label><br>
            <input type="text" name="name" required><br><br>
            <label>Item Description</label><br>
            <textarea name="description" required></textarea><br><br>
            <button type="submit" name="uploadfile">Upload Item</button> 
    </section>
    <section>
        <!--PUT THIS IN ALL PAGES OF MEMBERS AREA -->
        <ul>
            <li><a href="create_user.php">Create User</a></li>
            <li><a href="create_item.php">Create a New Item</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </section>
</main>
<?php
require_once 'footer.php';
?>


