<?php
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];

    $target_dir = "../assets/images/";
    $image = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO lost_items (item_name, description, location, contact, image) 
            VALUES ('$item_name', '$description', '$location', '$contact', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../pages/index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
