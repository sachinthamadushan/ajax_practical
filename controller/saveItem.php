<?php
include 'connection.php';
if (isset($_POST['item']) && isset($_POST['price']) && isset($_POST['img_url']) && isset($_POST['setCat'])) {
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $img_url = $_POST['img_url'];
    $setCat = $_POST['setCat'];

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["img_url"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img_url"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["img_url"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img_url"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO item(item_name, unit_price, img_url,`status`, category_id) VALUES ('$item_name', '$price', '$img_url', '1', '$setCat')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Item saved successfully.";
            } else {
                echo "Failed to save item.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
