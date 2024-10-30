<?php
include 'connection.php';
if (isset($_POST["category"])) {
    $category = $_POST["category"];
    $id = $_POST["id"];
    $sql = "UPDATE category SET category = '$category' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Category updated successfully.";
    }else{
        echo "Failed to update category.";
    }
}
?>