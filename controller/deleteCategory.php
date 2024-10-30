<?php
include 'connection.php';

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM category WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'Category deleted successfully.';
    }else{
        echo "Failed to delete category.";
    }
}