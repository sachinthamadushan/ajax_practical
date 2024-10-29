<?php
include 'connection.php';
if (isset($_POST["category"])) {
    $category = $_POST["category"];
    $sql = "INSERT INTO category (category) VALUES ('$category')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Category saved successfully.";
    }else{
        echo "Failed to save category.";
    }
}
?>